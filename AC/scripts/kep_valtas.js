$("#logo").one("click", function () {
    $("#logo").fadeOut("slow", function () {
        $.ajax({
            url: "./moduls/reg.php",
            type: "GET",
            dataType: "html",
            success: function (response) {
                $(".regisztracio").html(response).hide().fadeIn("slow");
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        });
    });
});
