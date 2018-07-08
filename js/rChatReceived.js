$(document).ready(function () {
    var chatInterval = 250; //refresh interval in ms
    var $chatOutput = $("#chatOutput");


    function retrieveMessages() {
        $.get("./nonfinancialreadreceived.php", function (data) {
            $chatOutput.html(data); //Paste content into chat output
        });
    }

    setInterval(function () {
        retrieveMessages();
    }, chatInterval);
});