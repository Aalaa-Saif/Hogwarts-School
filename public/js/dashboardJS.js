
function close_sidebar(){
   var close_sidebar = document.getElementById("sidebar-id");
   var close_sidebtn = document.getElementById("sidebtn-id");
   var name_space_id = document.getElementById("name_space");

   close_sidebar.style.width = '0';
   close_sidebtn.style.marginLeft = '0';
   close_sidebtn.style.transition = '0.9s';
   name_space_id.style.left = "0px";

}

function open_sidebar(){
    var open_sidebar = document.getElementById("sidebar-id");
    var open_sidebtn = document.getElementById("sidebtn-id");

    open_sidebar.style.width = "250px";
    open_sidebtn.style.marginLeft = "250px";
    open_sidebtn.style.transition = '0.9s';

}

function name_space (){
    var name_space = document.getElementById("name_space");

    name_space.style.display = "block";
}

function name_space_close(){
    var name_space = document.getElementById("name_space");
    name_space.style.display = "none";
}

