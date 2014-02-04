define(['models/user_mdl', 'views/list_view'], function(User_mdl, List_view){
     
    function start(){
        var users = JSON.parse(window.localStorage['users'] || (window.localStorage['users'] = '[]'));

        if (users.length == 0)
        {
          users = [new User_mdl('Barney'),
                      new User_mdl('Cartman'),
                      new User_mdl('Sheldon')];
        };
        List_view.render({users:users});
    }
     
    return {
        start:start
    };
});