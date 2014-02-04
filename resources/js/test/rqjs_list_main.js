'use strict';

/*global require */
require.config(
{
    baseUrl: RESJSURL+'/test',
    paths: {
        hashchange: '../vendor/jquery.hashchange.min',
        can: '../vendor/can',
        core: '../core'
    },
    shim: {
        'hashchange' : {
            deps: [],
            exports: 'HashChange'
        }
    }
});

//Массив модулей, которые мы хотим загрузить, объявленных путями к ним относительно точки входа (data-main="")
require(['my_math'], function(MyMath)
{
    console.log(MyMath.add(1, 2)); 
});

require(['hashchange', 'router'], function(HashChange, Router)
{

    $(function () {
        Router.start_routing();
    });
    
});


