define(['can/model', 'can/util/fixture'], function(Model, Fixture) {
  'use strict';

    var Package = Model.extend ({
      findAll: function(params) 
      { 
        var data = [];
        for (var it=1; it<=20; it++)
        {
          var rand_str = function()
          {
              var text = "";
              var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

              for( var i=0; i < 10; i++ )
                  text += possible.charAt(Math.floor(Math.random() * possible.length));

              return text;
          };
          data.push({id: it, value: rand_str});
        }
        return new can.Deferred().resolve({data: data});
      }
      
    },{});
    
    var Pages = Model.extend ({findAll: function(params) { var def = new can.Deferred(); return def.resolve({data:params});}},{});
    
    return {
        Package: Package,
        Pages: Pages
    };
    
});