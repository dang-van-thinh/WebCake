$(document).ready(function () {
   var menu_item = $('#menu_admin');
   menu_item.find('li.nav-item').hover(function(){
    $(this).addClass('bg-body-secondary')
    
   },function(){
    $(this).removeClass('bg-body-secondary')
   })
});
