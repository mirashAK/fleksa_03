define(function(){
     
    function render(parameters){
        var appDiv = document.getElementById('app');
        appDiv.innerHTML = '<input id="user-name" /><button id="add" class="small"><i class="icon-plus"></i> Add this user</button>';
    }
     
    return {
        render:render
    };
});