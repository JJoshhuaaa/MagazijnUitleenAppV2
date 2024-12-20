function setActiveNavItem() {
    // Haal het huidige pad op
    const currentPath = window.location.pathname;
    
    // Verwijder alle active klassen
    $('#navbarSupportedContent ul li').removeClass('active');
        
    // Zoek de juiste link en voeg active toe aan de parent li
    $('#navbarSupportedContent ul li a').each(function() {
        const href = $(this).attr('href').split('/').pop();
        // Check voor zowel sign_in.php als sign_up.php
        if (currentPath.includes(href) || 
            (href === 'sign_in.php' && currentPath.includes('sign_up.php')) || 
            (href === 'sign_up.php' && currentPath.includes('sign_in.php'))) {
            $(this).parent('li').addClass('active');
            $('.hori-selector').css('opacity', '1');
        }
    });
}

function test() {
    var tabsNewAnim = $('#navbarSupportedContent');
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    $(".hori-selector").css({
        "top": itemPosNewAnimTop.top + "px",
        "left": itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
    });

    $("#navbarSupportedContent").on("click", "li", function() {
        $('#navbarSupportedContent ul li').removeClass("active");
        $(this).addClass('active');
        var activeWidthNewAnimHeight = $(this).innerHeight();
        var activeWidthNewAnimWidth = $(this).innerWidth();
        var itemPosNewAnimTop = $(this).position();
        var itemPosNewAnimLeft = $(this).position();
        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
    });
}

$(document).ready(function() {
    setActiveNavItem();
    setTimeout(function() { test(); });
});

$(window).on('resize', function() {
    setTimeout(function() { test(); }, 500);
});

$(".navbar-toggler").click(function() {
    $(".navbar-collapse").slideToggle(300);
    setTimeout(function() { test(); });
});
