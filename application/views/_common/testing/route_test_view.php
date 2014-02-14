<div id="container" class="grid">
    <h4 class="center">Welcome to Fleksa v.03 !</h4>
    
    <div id="body" class="grid">
        <div class="col_4 column"></div>
        <div class="center col_4 column list_holder">
        
            <section id="routeapp"></section>
                
        </div>
        <div class="col_4 column"></div>
    </div>
</div>

<script type="text/mustache" id="app-template">
          <route-app>
                          <ul>
                                  <li>{{{link "All" undefined}}}</li>
                                  <li>{{{link "Active" "active"}}}</li>
                                  <li>{{{link "Completed" "completed"}}}</li>
                                  <li>{{{link "Computed" "computed"}}}</li>
                                  <li>{{{link "Tested" "tested"}}}</li>
                          </ul>
                          <ul>
                                  <li>{{{link_id "All" "root" undefined}}}</li>
                                  <li>{{{link_id "Active" "active" 1}}}</li>
                                  <li>{{{link_id "Completed" "completed" 2}}}</li>
                                  <li>{{{link_id "Computed" "computed" 3}}}</li>
                                  <li>{{{link_id "Tested" "tested" 4}}}</li>
                          </ul>
                          {{filter}}
                          {{id}}
                          
                          <select>
                            {{#each sort_list}}
                              <option can-click="sorting">{{value}}</option>
                            {{/each}}
                          </select> 
                          <select>
                            {{#each filt_list}}
                              <option can-click="filtering">{{value}}</option>
                            {{/each}}
                          </select> 
          </route-app>
  </script>

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div>
    <p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>