/* global define */
define([
    'can/util/library',
    'can/component',
    'can/route',
    'can/model'
], function (can, Component, Route, Model) {
    'use strict';

    var ESCAPE_KEY = 27;
    
//     Route.bind('change', function(event, attr, how, newVal, oldVal) {
//         //console.log('type: '+event.type+'; attr: '+attr+'; how: '+how+'; newVal: '+newVal+'; oldVal: '+oldVal+';');
//     });
    
     function rand( min, max ) 
     {   // Generate a random integer
          if( max ) return Math.floor(Math.random() * (max - min + 1)) + min;
          else return Math.floor(Math.random() * (min + 1));
      };
      
      var Sort = Model.extend({
        findAll: function() {
          var def = new can.Deferred(),
                instances = [{id:1, value:'one'},{id:2, value:'two'},{id:3, value:'three'}];
          return def.resolve({data: instances});
        }
      },{});
      
      var Filter = Model.extend({
        findAll: function() {
          var def = new can.Deferred(),
                instances = [{alias:'one', value:'one'},{alias:'two', value:'two'},{alias:'three', value:'three'}];
          return def.resolve({data: instances});
        }
      },{});
      
    return Component.extend({
        tag: 'route-app',
        scope: {
          filter: null,
          id: null,
          sort_list: new Sort.List({}),
          sorting: function (sort)
          {
            
          },
          filt_list: new Filter.List({}),
          filtering: function (filter)
          {
             console.log(filter.attr('alias'));
          }
        },
        events: {
            'route': function(data) {
              // сработает, если хэш удалён и нет значения по умолчанию
              console.log('route');
            },
//             ':filter route': function(routeObj) {
//               // работает при всех изменениях, подходящих под шаблон Can.route(':filter', {filter: "root"});
//               // this.scope.attr('filter', can.route.attr('filter')); // Так тоже можно
//               this.scope.attr('filter', routeObj.filter); 
//               // console.log(routeObj); // Object { filter="filter_value"}
//               console.log(':filter route' + '   ' + this.scope.attr('filter'));
//             },
            '{can.route} filter': function(routeObj, data1, newVal, oldVal) {
              // Чуть более правильный вариант - следит за изменением параметра в объекте роутера
              //this.scope.attr('filter', routeObj.attr('filter'));
              //console.log(data1);//Object { type="filter", batchNum=8, target=Constructor}
              this.scope.attr('filter', newVal);
              console.log('{can.route} filter '+newVal);
              //console.log(this.scope.attr('sort'));
            },
            '{can.route} id': function(routeObj, data1, newVal, oldVal) {
              this.scope.attr('id', newVal);
              console.log('{can.route} id '+newVal);
            }
        },
        helpers: {
            link: function (name, filter) {
                var data = filter ? { filter: filter } : {};
                return Route.link(name, data, {
                    className: Route.attr('filter') === filter ? 'selected' : ''
                });
            },
            link_id: function (name, filter, id) {
                var data = filter ? { filter: filter } : {};
                if(id) data.id = id;
                return Route.link(name, data, {
                    className: Route.attr('filter') === filter ? 'selected' : ''
                });
            },
            plural: function (singular, num) {
                return num() === 1 ? singular : singular + 's';
            }
        }
    });
    

});