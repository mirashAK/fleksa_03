//Массив модулей, которые мы хотим загрузить, объявленных путями к ним относительно точки входа (data-main="")
require(['my_math'], function(MyMath)
{
    console.log(MyMath.add(1, 2)); 
});


