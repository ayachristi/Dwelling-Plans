$(document).ready(function () {
    $(".navbar-tg").click(function () {
        $(".navbar-bg").toggleClass("active");
        $(".notification").toggleClass("deactive");

        $(".top").toggleClass("active");
        $(".middle").toggleClass("active");
        $(".bottom").toggleClass("active");
    });

    var url = window.location.pathname; // Use pathname instead of the full URL

    $('ul.nav a[href="' + url + '"]')
        .parent()
        .addClass("active");

    $("ul.nav a")
        .filter(function () {
            return this.pathname == url;
        })
        .parent()
        .addClass("active");
});
