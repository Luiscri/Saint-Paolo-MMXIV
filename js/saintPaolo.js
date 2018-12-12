<!-- Script for changing navBar active li -->
$(document).ready(function () {
    // Ejemplo URL http://domain.com/page.html
    var currentLocation = window.location.href.split('/');
    var pagePortion = (currentLocation[currentLocation.length - 1]).split('.php');
    var page = pagePortion[0];
    if(page.length == 0 || page == "?i=1" || page == "aspectos-legales"){
        page = "./";
    }else if(page == "submit"){
        page = "contacto";
    }else if(page != "index" && page != "tienda" && page != "fotos" && page != "contacto"){
        page = "tienda";
    }
    $('.navbar .nav-link[href*="' + page + '"]').parent().addClass('active'); //El *= es para que valga con que lo contenga en vez de que tenga que ser igual
    $('.navbar .nav-link[href*="' + page + '"]').children().removeClass('animated');
    $('.navbar .nav-link[href*="' + page + '"]').children().addClass('actual');

    <!-- Close navbar when you click outside -->
    $("body").not($("nav")).on("click", function(){
        if ($(".navbar-collapse").is(":visible") && $(".navbar-toggler").is(":visible") ) {
            $('.navbar-collapse').collapse('toggle');
        }
    });
});