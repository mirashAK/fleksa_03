'use strict';

/*global require */
require.config({
        baseUrl: RESJSURL,
        
        shim: {
                'hashchange' : {
                        exports: 'hashchange',
                        deps: ['jquery']
                }
        },
        paths: {
                jquery : [JQUERY_CDN, JQUERY_LOC],
                can: 'vendor/can',
                fileapi: 'vendor/fileapi',
                hashchange: 'vendor/jquery.hashchange.min',
        }
});

switch (window.can_ctrl) {
    case 'router':
      
          require([ 'jquery',  'hashchange',  'can', 'test/controllers/route_ctrl' ], 
          function ($, HashChange, Can, Route_ctrl) 
          {
              $(function () {
                Can.route(':filter', {filter: "root"});
                Can.route(':filter/:id', {filter: "root", id: undefined});
                $("#routeapp").html( Can.view('app-template',{}) );
                Can.route.ready();
              });
          });
          
          break;
          
    case 'pages':
      
          require([ 'jquery',  'hashchange',  'can', 'test/controllers/pages_ctrl' ], 
          function ($, HashChange, Can, Paginator_ctrl) 
          {
              $(function () {
                Can.route(':filter', {filter: "root"});
                Can.route(':filter/:id', {filter: "root", id: undefined});
                $("#routeapp").html( Can.view('app-template',{}) );
                Can.route.ready();
              });
          });
          
          break;
    default: break;
}