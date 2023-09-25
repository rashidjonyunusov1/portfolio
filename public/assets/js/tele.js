//bot token
var telegram_bot_id = "5890496931:AAHhIXo-wHuCK1r8jtn0c_kaItwoifJciwI"; //Bot tokeni
//chat id
var chat_id = 1864163503; //xabar borishi kk bulgan odam IDsi
var u_name, number, message, email;
var ready = function() {
    u_name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    number = document.getElementById("number").value;
    // subject = document.getElementById("subject").value;
    message = document.getElementById("message").value;
    message = "Ismi: " + u_name + "\nEmail: "+ email + "\nNumber: " + number +"\nIzoh: " + message;
};
var sendtelegram = function() {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"
        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function(response) {
        console.log(response);
    });
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("number").value = "";
    document.getElementById("message").value = "";
    return false;
};
