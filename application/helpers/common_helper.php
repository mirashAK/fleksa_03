<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/***********************************************************************************
Функция getRealIpAddr: получение IP адреса подключившегося
Возвращает:
  IP адрес в виде строки
***********************************************************************************/
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    else
      $ip=$_SERVER['REMOTE_ADDR'];
    return $ip;
}

/***********************************************************************************
Функция get_browser_lang: получение предпочитаемого языка для браузера клиента
Возвращает:
  язык в двухбуквенном виде
***********************************************************************************/
function get_browser_lang()
{
  $langs = array();
  if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
  {
    // Разбить строку в соответствии со значением q
    preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i',
    $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);
    if (count($lang_parse[1]))
    {
      // создать список если "en" => 0.8
      $langs = array_combine($lang_parse[1], $lang_parse[4]);
      // установить значение в 1 для всех без q
      $k = sizeof($langs);
      foreach ($langs as $lang => $val)
      {
        if ($val === '') {$langs[$lang] = 1; $k--;}
      }
      // сортировка списка на основе значения
      if ($k) arsort($langs, SORT_NUMERIC);
    }
  }
  // извлечь самый приоритетный
  foreach ($langs as $lang => $val) { break; }
    if (stristr($lang,"-")) { $tmp = explode("-",$lang); $lang = $tmp[0]; }
    
  return $lang;
}

/**
* sub_url
* Form uri with subdomain
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('sub_url'))
{
    function sub_url($uri = '',  $include_lang = true)
    {
        $CI =& get_instance();
        return $CI->config->sub_url($uri, $include_lang);
    }
}

/**
* res_url
* Form uri with subdomain
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('res_url'))
{
    function res_url($uri = '')
    {
        $CI =& get_instance();
        return $CI->config->res_url($uri);
    }
}


/**
* sub_domain
* Returns sub domain name from URL string.
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('sub_domain'))
{
    function sub_domain($new_sub_domain = null)
    {
        $CI =& get_instance();
        return $CI->config->sub_domain($new_sub_domain);
    }
}


/**
* base_link
* Get menu item from `public_menus` by `menu_item_name`.
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('base_link'))
{
    function base_link($link_alias = null, $include_lang = true)
    {
        $CI =& get_instance();
        return $CI->flx_links_lib->base_link($link_alias, $include_lang);
    }
}

/**
* sub_link
* Get menu item from `public_menus` by `menu_item_name`.
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('sub_link'))
{
    function sub_link($link_alias = null, $include_lang = true)
    {
        $CI =& get_instance();
        return $CI->flx_links_lib->sub_link($link_alias, $include_lang);
    }
}

/**
* lang
* Shortcut to curr language
 *
 * @access  public
 * @return  string
 */
if ( ! function_exists('lang'))
{
    function lang($url = false)
    {
        $CI =& get_instance();
        return $CI->config->lang($url);
    }
}

function GB ($bytes = null)
{
  return round($bytes/(1024*1024*1024), 2, PHP_ROUND_HALF_UP);
}

function MB ($bytes = null)
{
  return round($bytes/(1024*1024), 2, PHP_ROUND_HALF_UP);
}

function KB ($bytes = null)
{
  return round($bytes/(1024), 2, PHP_ROUND_HALF_UP);
}

// ------------------------------------------------------------------------

if ( ! function_exists('mysql_russian_date'))
{
   function mysql_russian_date($datestr = '')
   {
      if ($datestr == '')
         return '';

      // получаем значение даты и времени
          list($day) = explode(' ', $datestr);

          switch( $day )
          {
         // Если дата совпадает с сегодняшней
         case date('Y-m-d'):
                       $result = 'cегодня';
                        break;

         //Если дата совпадает со вчерашней
         case date( 'Y-m-d', mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")) ):
                      $result = 'вчера';
                        break;

          default:
          {
               // Разделяем отображение даты на составляющие
                 list($y, $m, $d)  = explode('-', $day);

            $month_str = array(
                   'января', 'февраля', 'марта',
                   'апреля', 'мая', 'июня',
                   'июля', 'августа', 'сентября',
                   'октября', 'ноября', 'декабря'
                );
            $month_int = array(
                   '01', '02', '03',
                   '04', '05', '06',
                   '07', '08', '09',
                   '10', '11', '12'
                );
  
            // Замена числового обозначения месяца на словесное (склоненное в падеже)
                      $m = str_replace($month_int, $month_str, $m);
                      // Формирование окончательного результата
            $result = $d.' '.$m.' '.$y;
         }
          }
           return $result;


   }
}


// ------------------------------------------------------------------------

if ( ! function_exists('mysql_russian_datetime'))
{
   function mysql_russian_datetime($datestr = '', $delim = ' в ')
   {
      if ($datestr == '')
         return '';

              // Разбиение строки в 3 части - date, time and AM/PM 
              $dt_elements = explode(' ',$datestr);
              
              // Разбиение даты
              $date_elements = explode('-',$dt_elements[0]);
              
              // Разбиение времени
              $time_elements =  explode(':',$dt_elements[1]);
              
              // вывод результата
              $result1 = mktime($time_elements[0],$time_elements[1],$time_elements[2], $date_elements[1],$date_elements[2], $date_elements[0]);
          
               $monthes =
                  array(' ','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря');
                  $days =
                  array(' ','понедельник','вторник','среда','четверг','пятница','суббота','воскресенье');
                  $day = date("j",$result1);
                  $month = $monthes[date("n",$result1)];
                  $year = date("Y",$result1);
                  $hour = date("H",$result1);
                  $minute = date("i",$result1);
                  $dayofweek = $days[date("N",$result1)];
                  $result = $day.' '.$month.' '.$year.$delim.$hour.':'.$minute;
        
         
           return $result;


   }
}
// ------------------------------------------------------------------------

if ( ! function_exists('proceedTextual'))
{
   function proceedTextual( $numeric, $many, $one, $two )
   {
        $numeric = (int) abs($numeric);
        if ( $numeric % 100 == 1 || ($numeric % 100 > 20) && ( $numeric % 10 == 1 ) ) return $one;
        if ( $numeric % 100 == 2 || ($numeric % 100 > 20) && ( $numeric % 10 == 2 ) ) return $two;
        if ( $numeric % 100 == 3 || ($numeric % 100 > 20) && ( $numeric % 10 == 3 ) ) return $two;
        if ( $numeric % 100 == 4 || ($numeric % 100 > 20) && ( $numeric % 10 == 4 ) ) return $two;

        return $many;
    }
}
// ------------------------------------------------------------------------

if ( ! function_exists('proceed_textual_arr'))
{
   function proceed_textual_arr ($numeric, $str_arr)
   {
        $numeric = (int) abs($numeric);
        if ( $numeric % 100 == 1 || ($numeric % 100 > 20) && ( $numeric % 10 == 1 ) ) return $str_arr[1];
        if ( $numeric % 100 == 2 || ($numeric % 100 > 20) && ( $numeric % 10 == 2 ) ) return $str_arr[2];
        if ( $numeric % 100 == 3 || ($numeric % 100 > 20) && ( $numeric % 10 == 3 ) ) return $str_arr[2];
        if ( $numeric % 100 == 4 || ($numeric % 100 > 20) && ( $numeric % 10 == 4 ) ) return $str_arr[2];

        return $str_arr[0];
    }
}
// ------------------------------------------------------------------------
