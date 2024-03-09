$(document).ready(function () { 

// HAMBURGER MENU
$("#hamburger").on("click", function () {
    if ($("#hamburger").attr("name") === "menu") {
        $("#hamburger").attr("name", "close");
        if ($("#hamburger").attr("name") === "close") {
            $("nav").css("display", "block");
        }
    } else {
        $("#hamburger").attr("name", "menu");
        if ($("#hamburger").attr("name", "menu")) {
            $("nav").css("display", "none");
        }
    }
});

// Add code to insertAfter('nav') when screen size is above 768px
$(window).on("load resize", function () {
    if ($(window).width() > 768) {
        $("#get-started").insertAfter("nav");
        $("#get-started").css("display", "flex");
    } else {
        $("#get-started").insertAfter('nav ul');


    }
});

});