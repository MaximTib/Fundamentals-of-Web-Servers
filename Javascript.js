function OnlyLetters(fname, lname) {
    var letters = /^[A-Za-z]+$/;

    alert(fname);
    alert(lname);
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
function NewImage() {
    document.getElementById("img1").src = "images/Corgi_image.jpg";
}

function OldImage() {
    document.getElementById("img1").src = "images/image_of_a_dog.jpg";
}

function CheckboxValidation() {
    var checkBox1 = document.getElementById("busy");
    var checkBox2 = document.getElementById("depressed");
    var checkBox3 = document.getElementById("idealhuman");

    var checks = [checkBox1, checkBox2, checkBox3];
    var i;

    //if checkbox checked, display php content
    for (i = 0; i < checks.length; i++) { alert("HI")
        if (checks[i].checked == true) {
            if (i == 0) {
                 <? php echo "I have/had a dog and want another"; ?>
            }
            else if (i == 1) {
                <? php echo "You selected: I am feeling lonely and seeking companionship"; ?>
            }
            else if (i == 2) {
                <? php echo "You selected: I have at least 30 minutes of free time every day"; ?>
            }
            else {
                <? php echo "You haven't selected any options for the second checkbox"; ?>
            }



        }
    }
}