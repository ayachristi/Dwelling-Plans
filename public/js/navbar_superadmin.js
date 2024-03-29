$(document).ready(function () {
    $(".sidebar-tg").click(function () {
        $(".sidebar").toggleClass("minimize");
        $(".sidebar-bg").toggleClass("minimize");

        $(".sidebar-tg").toggleClass("minimize");
        $(".top").toggleClass("active");
        $(".middle").toggleClass("active");
        $(".bottom").toggleClass("active");
    });

    var url = window.location.pathname;

    $('.sidebar ul a[href="' + url + '"]')
        // .parent()
        .addClass("active");

    $(".sidebar ul a")
        .filter(function () {
            return this.pathname == url;
        })
        // .parent()
        .addClass("active");
});
