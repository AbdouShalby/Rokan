/* global console, $ */
$(function () {
    'use strict';

    $(".change").on("click", function () {
        if ($("body").hasClass("dark")) {
            $("body").removeClass("dark");
            $(".change").text("dark_mode");
            localStorage.setItem("dark_mode", "off");
        } else {
            $("body").addClass("dark");
            $(".change").text("light_mode");
            localStorage.setItem("dark_mode", "on");
        }
    });

    if (localStorage.getItem("dark_mode") === "on") {
        $("body").addClass("dark");
        $(".change").text("light_mode");
    }

    // Cashing Scroll Up Element
    var scrollButton = $("#scroll-up");
    // On Click Animation
    scrollButton.click(function () {
        $("html, body").animate({scrollTop: 0}, 0);
    });

    // Smoothly Scroll To Element
    $('.n-contact, .landing .row a').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top
        }, 0);
    });

    $("#calculate").click(function () {
        var price = $("#productPrice").val();
        var number = $("#productNumber").val();
        var totalPrice = parseInt(price) * parseInt(number);
        alert(totalPrice);
        $("#totalPrice").val(totalPrice);
    })

});

