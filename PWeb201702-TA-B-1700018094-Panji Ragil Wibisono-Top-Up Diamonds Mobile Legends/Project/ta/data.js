function validateForm() {
    var e = document.forms["tapp"]["tele"].value;
    if (e == "") {
        alert("'Nomor Ponsel' must be filled out");
        return false;
    }
}