console.log("javascript ready...");

$(function () {
    $("#reg-log").on("change", function () {
        if ($(this).is(":checked")) {
            // Checkbox is checked
            toastr.error("Fitur Sign Up belum tersedia kawan. hehehe");
        }
    });
});
