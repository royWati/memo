$(document).ready(function () {
    var chatInterval = 250; //refresh interval in ms
    var $chatOutput = $("#chatOutputSent");


    function retrieveMessages() {
        $.get("./nonfinancialreadsent.php", function (data) {
            $chatOutput.html(data); //Paste content into chat output
        });
    }

    setInterval(function () {
        retrieveMessages();
    }, chatInterval);
});