function OnlyLetters() {
    var letters = /^[A-Za-z]+$/;
    var firstn=document.getElementById("fname");
    var lastn=document.getElementById("lname");

    if ((firstn.value.match(letters)) && (lastn.value.match(letters))) {
        {
            return true;
        }
    }
    else {
        alert("Names can only contain letters");
        return false;
    }
}

