$(document).ready(function() {
    $("div#reply_button").click(function() {
        var button_class = $(this).attr("class").replace("button", "");
        console.log(button_class); // take this out after
        $("#send_message").css("display", "block");
    });
});
