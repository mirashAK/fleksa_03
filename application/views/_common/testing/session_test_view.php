<div id="container">
	<h1>Welcome to Fleksa v.03 !</h1>

	<div id="body">
	
	    <p>User data:</p>
        <code> user_token: {user_token}<br/>
                    user_ip: {user_ip}<br/>
                    sess_last_activity: {sess_last_activity}<br/>
                    user_dump: {user_dump}<br/>
                    session_dump: {session_dump}<br/>
        </code>
	
		<p>Auth form:</p>
          <div class="auth_form_reload_container">
          {auth_form}
          </div>
        
        <p>Reg form:</p>
          <div id="reload_container">
          {reg_form}
          </div>
        
        <p>Logout:
        <a href="{sub_url}/testing/session_test/logout">Logout</a></p>
        
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>