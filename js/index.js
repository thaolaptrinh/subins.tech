


var toggle = document.querySelector("#menu-toggle");
var menu = document.getElementById("menu");

toggle.onclick = function(){
   if(menu.style.display == ''){
    menu.style.display = "block";
   }else{
    menu.style.display = '';
   }



} 
