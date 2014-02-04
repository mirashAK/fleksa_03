'use strict';

/*global require */
require.config({
    paths: {
        can: '../vendor/can',
        core: '../core'
    }
});

//Массив модулей, которые мы хотим загрузить, объявленных путями к ним относительно точки входа (data-main="")
require(['my_math'], function(MyMath)
{
    console.log(MyMath.add(1, 2)); 
});

require(['router'], function(Router)
{

    $(function () {
        Router.start_routing();
    });
    
});

require(['forms'], function(Forms)
{
    
    
});


