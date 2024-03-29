$(document).ready(function () {
    $("#edit_button").click(function () {
        $("#edit_profile_form input").prop("disabled", false);

        $("#edit_button").hide();
        $("#save_button").show();
    });
});
