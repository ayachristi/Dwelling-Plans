$(document).ready(function () {
    $("#toggleSignUp").click(function () {
        // right section of login container
        $(".login-right").addClass("toggle-left");
        $(".login-right").removeClass("toggle-right");

        $(".toggle-buttons").addClass("going-right");
        $(".toggle-buttons").removeClass("going-left");

        // signin and signup button
        $(".toggleSignUp").addClass("active");
        $(".toggleSignUp").removeClass("unactive");
        $(".toggleSignIn").removeClass("active");
        $(".toggleSignIn").addClass("unactive");

        // background image container
        $(".img-bg").removeClass("active");
        $(".img-bg").addClass("unactive");

        $(".login-left .form-wrapper").addClass("active");
        $(".login-left .form-wrapper").removeClass("unactive");

        $(".login-right .signup-form-wrapper").removeClass("active");
        $(".login-right .signup-form-wrapper").addClass("unactive");

        $(".login-page .signup-banner").addClass("banner-going-right");
        $(".login-page .signup-banner").removeClass("banner-going-left");
    });

    $("#toggleSignIn").click(function () {
        // right section of login container
        $(".login-right").removeClass("toggle-left");
        $(".login-right").addClass("toggle-right");
        $(".toggle-buttons").removeClass("going-right");
        $(".toggle-buttons").addClass("going-left");

        // signin and signup button
        $(".toggleSignUp").removeClass("active");
        $(".toggleSignUp").addClass("unactive");
        $(".toggleSignIn").addClass("active");
        $(".toggleSignIn").removeClass("unactive");

        // background image container
        $(".img-bg").addClass("active");
        $(".img-bg").removeClass("unactive");

        $(".login-left .form-wrapper").removeClass("active");
        $(".login-left .form-wrapper").addClass("unactive");

        $(".login-right .signup-form-wrapper").addClass("active");
        $(".login-right .signup-form-wrapper").removeClass("unactive");

        $(".login-page .signup-banner").removeClass("banner-going-right");
        $(".login-page .signup-banner").addClass("banner-going-left");
    });
});
