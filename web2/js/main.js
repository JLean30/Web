$(document).ready(function() {
    $(".header-container__cross").hide();
    $(".header-container__menu").hide();
    $(".header-container__hamburger").click(function() {
        $(".header-container__menu").slideToggle("slow", function() {
            $(".header-container__hamburger").hide();
            $(".header-container__cross").show();
        });
    });

    $(".header-container__cross").click(function() {
        $(".header-container__menu").slideToggle("slow", function() {
            $(".header-container__cross").hide();
            $(".header-container__hamburger").show();
        });
    });

});