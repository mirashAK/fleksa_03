<div id="container">
    <h1>Welcome to Fleksa v.03 !</h1>

    <div id="body">
        <p>Test some base parameters</p>

        <p>Config parameters:</p>
        <code><?php
        echo('current_url(): ');var_export(current_url());echo('<br/>');
        echo('sub_domain(): ');var_export(sub_domain());echo('<br/>');
        echo('base_url(): ');var_export(base_url());echo('<br/>');
        echo('base_url("testing/welcome_test"): ');var_export(base_url('testing/welcome_test'));echo('<br/>');
        echo('base_url("testing/welcome_test", false): ');var_export(base_url('testing/welcome_test', false));echo('<br/>');
        echo('uri_string(): ');var_export(uri_string());echo('<br/>');
        echo('res_url(): ');var_export(res_url());echo('<br/>'); 
        echo('res_url("testing/welcome_test"): ');var_export(res_url('testing/welcome_test'));echo('<br/>'); 
        echo('site_url("testing/welcome_test"): ');var_export(site_url('testing/welcome_test'));echo('<br/>');
        echo('sub_url(): ');var_export(sub_url());echo('<br/>');
        echo('sub_url("testing/welcome_test"): ');var_export(sub_url('testing/welcome_test'));echo('<br/>');
        echo('sub_url("testing/welcome_test", false): ');var_export(sub_url('testing/welcome_test', false));echo('<br/>');
        ?></code>

        <p>Define language:</p>
        <code>
          $this->uri->lang; <?php var_export($lang); ?><br/>
          lang(); <?php var_export($uri_lang); ?>
        </code>
        <p>Translated string:</p>
        <code>
          Defined lang: {test_email_missing}<br/>
        </code>  
        <code>
          EN lang: {en_test_email_missing}<br/>
          UK lang: {uk_test_email_missing}<br/>
          RU lang: {ru_test_email_missing}
        </code>
        
        <p>Test Extended parser</p>
        <code>
          {test_arr:first}<br/>
          {test_arr:second}<br/>
          {test_arr:third}<br/>
          {test_arr:fourth}<br/>
        </code>
        <br/>
    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>