

function close_sidebar(){
   var close_sidebar = document.getElementById("sidebar-id");
   var close_sidebtn = document.getElementById("sidebtn-id");

   close_sidebar.style.width = '0';
   close_sidebtn.style.marginLeft = '0';

}

function open_sidebar(){
    var open_sidebar = document.getElementById("sidebar-id");
    var open_sidebtn = document.getElementById("sidebtn-id");

    open_sidebar.style.width = "250px";
    open_sidebtn.style.marginLeft = "250px";
}
