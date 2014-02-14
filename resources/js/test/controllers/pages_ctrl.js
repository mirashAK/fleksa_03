/* global define */
define([
    'can/util/library',
    'can/component',
    'can/route',
    'test/models/pages_mdl'
], function (can, Component, Route, Pages_mdl) {
    'use strict';

    var ESCAPE_KEY = 27;

    return Component.extend({
        tag: 'pages-app',
        scope: {
            packs_list: new Pages_mdl.Package.List({}),
            filter_list: new Pages_mdl.Pages.List([{value:'third'},{value:'fourth'}]),                
        }
    });
    

});