/*global require */
require.config({
    paths: {
        jquery: '../../vendor/jquery-1.10.2.min',
        can: '../../vendor/can',
        localstorage: './can.localstorage'
    }
});

require([
    'jquery',
    'can/view',
    'can/route',
    './components/todo-app'
], function ($, can, route) {
    'use strict';

    $(function () {
        // Set up a route that maps to the `filter` attribute
        route(':filter');
        

        // Render #app-template
        $('#todoapp').html(can.view('app-template', {}));

        // Start the router
        route.ready();
        console.log(route.attr());
    });
});