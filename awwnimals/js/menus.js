/**
 * Created by Harold on 12/1/2016.
 */
$(document).ready(function(){
    $('.dropdown-menu .dropdown-submenu a.submenu').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});