<div id="container" class="grid">
    <h4 class="center">Welcome to Fleksa v.03 !</h4>
    
    <div id="body" class="grid">
        <div class="col_4 column"></div>
        <div class="center col_4 column list_holder">
        
           <table border="1"><tr><th>id</th><th>value</th></tr>
              {{#st_pages}}
                <tr><td>{{static_page_id}}</td><td>{{static_page_alias}}</td></tr>
              {{/st_pages}}
              </table>
              
            <section id="routeapp">

            </section>
                
        </div>
        <div class="col_4 column"></div>
    </div>
</div>

<script type="text/mustache" id="app-template">
          <pages-app>
              <table border="1"><tr><th>id</th><th>value</th></tr>
              {{#packs_list}}
                <tr><td>{{id}}</td><td>{{value}}</td></tr>
              {{/packs_list}}
              </table>
              <ul>
              {{#filter_list}}
                <li>{{value}}</li>
              {{/filter_list}}
              </ul>
          </pages-app>
</script>

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div>
    <p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>