$("#logo").one("click", function () {
    $("#logo").fadeOut("slow", function () {
        $.ajax({
            url: "../moduls/be_form.php",
            type: "GET",
            dataType: "html",
            success: function (response) {
                $("#bejelentkezes").html(response).hide().fadeIn("slow");
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        });
    });
});
