$(window).scroll(function() {
    if($(this).scrollTop()>5) {
        $( ".navbar-me" ).addClass("fixed-top");
    } else {
        $( ".navbar-me" ).removeClass("fixed-top");
    }
});