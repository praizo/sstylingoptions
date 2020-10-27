function comparePass() {
    var x = document.getElementById("pwd1").value;
    var y = document.getElementById("pwd2").value;

    if (x !== y  ) {
        document.getElementById('butn').disabled = true;
        document.getElementById('errorPass').innerHTML = "Password doesn't match, check entry";
    } else {
        document.getElementById('butn').disabled = false;
        document.getElementById('errorPass').innerHTML = "";

    }
}

comparePass();