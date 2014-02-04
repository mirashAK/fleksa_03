define(function(){
 
    var routes = [{hash:'#list',  controller:'list_ctrl'},
                       {hash:'#add', controller:'add_ctrl'}];
    var defaultRoute = '#list';
    var currentHash = '';
     
    function start_routing(){

        // Bind the event.
        $(window).hashchange( function(){
          // Alerts every time the hash changes!
          hash_check();
        });
        
        window.location.hash = window.location.hash || defaultRoute;
        hash_check();
    }
    

     
     
    function hash_check(){
        if (window.location.hash != currentHash){
            for (var i = 0, currentRoute; currentRoute = routes[i++];){
                if (window.location.hash == currentRoute.hash)
                    load_controller(currentRoute.controller);
            }
            currentHash = window.location.hash;
        }
        console.log(window.location.hash);
    }
     
    function load_controller(controller_name){
        require(['controllers/' + controller_name], function(controller){
            controller.start();
        });
    }
     
    return {
        start_routing:start_routing
    };
});