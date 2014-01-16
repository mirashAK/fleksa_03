//Массив модулей, которые мы хотим загрузить, объявленных путями к ним относительно точки входа (data-main="")
require(['my_math'], function(MyMath){
     
    console.log(MyMath.add(1, 2)); 
 
});

require(['models/user_mdl', 'router'], function(User, Router){
     
    var users = [new User('Barney'),
                      new User('Cartman'),
                      new User('Sheldon')];
     
//     for (var i = 0, len = users.length; i < len; i++){
//         console.log(users[i].name);
//     }
     
    localStorage.users = JSON.stringify(users);
    
    Router.start_routing();
});