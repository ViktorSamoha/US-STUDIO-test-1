window.addEventListener("load", function() {
    function sendData() {
        const XHR = new XMLHttpRequest();

        const FD = new FormData(form);

        XHR.addEventListener("load", function(event) {
            alert(event.target.responseText);
        });

        XHR.addEventListener("error", function(event) {
            alert('Что-то пошло не так!((');
        });

        XHR.open("POST", "https://b24-x18kac.bitrix24.ru/rest/1/s16zvj6vs0r4h672/crm.lead.add.json");

        XHR.send(FD);
    }

    const form = document.getElementById("myForm");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        sendData();
    });
});