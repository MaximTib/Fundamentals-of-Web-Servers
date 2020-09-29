function OnlyLetters(fname,lname)
            {
                var letters = /^[A-Za-z]+$/;
                if((fname.value.match(letters)) && (lname.value.match(letters)))
                {
                    {
                        return true;
                    }
                }
                else
                {
                alert("Names can only contain letters");
                return false;
                }
            } 

function NumOnly(age)
            {
                var numbers = /^[0-9]+$/;
                x = document.getElementById("age").value;

                if((x.value.match(numbers))
                {
                    return true;
                }

                else
                {
                    alert("Enter a valid number");
                    return false;
                }
            }
function NewImage()
        {
            document.getElementById("img1").src = "images/Corgi_image.jpg";
        }

        function OldImage()
        {
            document.getElementById("img1").src = "images/image_of_a_dog.jpg";
        }  