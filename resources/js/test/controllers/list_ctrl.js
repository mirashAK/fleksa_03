define(['views/list_view'], function(list_view){
     
    function start(){
        var users = JSON.parse(localStorage.users);
        list_view.render({users:users});
    }
     
    return {
        start:start
    };
});