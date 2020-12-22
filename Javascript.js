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

function NewImage() {
    document.getElementById("img1").src = "images/image_of_a_dog.jpg";
}

function OldImage() {
    document.getElementById("img1").src = "images/Corgi_image.jpg";
}

function button1() {
    var x = 'They like bring scrached and petted. They are very smart, so you can train them fairly easily.';
    document.getElementById("corgi").innerHTML = x;  
}

function button2() {
    var x = 'This breed needs proper training from an early age if you do not want your house to be ruined.';
    document.getElementById("pitsky").innerHTML = x;  
}

function button3() {
    var x = 'They are very hyperactive and need lots of exercice on a daily basis, but they are easy to groom.';
    document.getElementById("beagador").innerHTML = x;  
}

function button4() {
    var x = 'You do not need to know anything about him, just look at how cute he is in the picture if you hover your mouse over it. Just get one!';
    document.getElementById("goldendox").innerHTML = x;  
}

