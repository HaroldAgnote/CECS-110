/**
 * Created by Harold on 12/1/2016.
 */
$(document).ready(function(){
    $('.dropdown-menu .dropdown-submenu a.submenu').on("click", function(e){
        var x = $('.dropdown-menu .dropdown-submenu').getElementsByName("test");
        //.getElementsByClassName('.dropdown-menu .dropdown-submenu a:not(.dropdown-menu .dropdown-submenu .dropdown-menu)');
        x.toggle(false);
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});