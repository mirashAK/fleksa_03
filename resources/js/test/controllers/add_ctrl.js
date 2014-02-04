define(['models/user_mdl', 'views/add_view'], function(User_mdl, Add_view){
 
    function start(){
        Add_view.render();
        bind_events();       
    }
    
    function bind_events(){
        $('#add').on('click', function(){
          
            var users = JSON.parse(window.localStorage['users'] || (window.localStorage['users'] = '[]'));
            
            var userName = document.getElementById('user-name').value;
            users.push(new User_mdl(userName));
            window.localStorage['users'] = JSON.stringify(users);
//             require(['controllers/list_ctrl'], function(List_ctrl){
//                 List_ctrl.start();
//             });
            window.location.hash = '#list';
        });
    }
 
    return {
        start:start
    };
});