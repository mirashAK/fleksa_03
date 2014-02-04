<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Logging Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Logging
 * @author		Fleksa core
 */
class Flx_Log extends CI_Log {

	protected $_log_last_result = FALSE;
	protected $_log_path_last_result;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
		
        $config =& get_config();
        
        if (array_key_exists('log_last_result', $config) && $config['log_last_result'] === TRUE)
        {
            $this->_log_last_result = TRUE;
            $this->_log_path_last_result = $this->_log_path.'last_result.php';
            if ( ! $fp = @fopen($this->_log_path_last_result, FOPEN_WRITE_CREATE_DESTRUCTIVE))
            {
                $this->_log_last_result = FALSE;
            }
            flock($fp, LOCK_EX);
            fwrite($fp, "<"."?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?".">\n\n");
            flock($fp, LOCK_UN);
            fclose($fp);

            @chmod($this->_log_path_last_result, FILE_WRITE_MODE);
        }
	}

	// --------------------------------------------------------------------

	/**
	 * Write Log File
	 *
	 * Generally this function will be called using the global log_message() function
	 *
	 * @param	string	the error level
	 * @param	string	the error message
	 * @param	bool	whether the error is a native PHP error
	 * @return	bool
	 */
	public function write_log($level = 'error', $msg, $php_error = FALSE)
	{
        parent::write_log($level, $msg, $php_error);
        
        $this->write_last_result_log($level, $msg);
	}
	
	protected function write_last_result_log($level = 'error', $msg)
    {
        if ( $this->_log_last_result === FALSE)
        {
            return FALSE;
        }
        
        $level = strtoupper($level);
        $message  = '';
        
        if ( ! $fp = @fopen($this->_log_path_last_result, FOPEN_WRITE_CREATE))
        {
            return FALSE;
        }

        $message .= $level.' '.(($level == 'INFO') ? '  -' : '-').' '.date($this->_date_fmt). ' --> '.$msg."\n";

        flock($fp, LOCK_EX);
        fwrite($fp, $message);
        flock($fp, LOCK_UN);
        fclose($fp);

        @chmod($this->_log_path_last_result, FILE_WRITE_MODE);
        return TRUE;
    }
}
// END Log Class