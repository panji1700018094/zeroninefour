function validateForm() {
    var a = document.forms["tap"]["ids"].value;
    var b = document.forms["tap"]["server"].value;
    var c = document.forms["tap"]["nominal"].value;
    var d = document.forms["tap"]["mbayar"].value;
    

    if (a == "") {
        alert("'ID' must be filled out");
        return false;
    }
    else if (b == "") {
        alert("'Server' must be filled out");
        return false;
    }
    else if (c == "") {
        alert("'Nominal' must be filled out");
        return false;
    }
    else if (d == "") {
        alert("'Pembayaran' must be filled out");
        return false;
    }    
}