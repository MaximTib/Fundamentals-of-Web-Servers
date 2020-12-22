function OnlyLetters(fname, lname) {
    var letters = /^[A-Za-z]+$/;

    if ((fname.value.match(letters)) && (lname.value.match(letters))) {
        {
            return true;
        }
    }
    else {
        alert("Names can only contain letters");
        return false;
    }
}

function NumOnly(age) {
    var numbers = /^[0-9]+$/;

    alert(age);

    if ((age.value.match(numbers)) {
        alert("valid");
        return true;
    }

    else {
        alert("Enter a valid number");
        return false;
    }
}
