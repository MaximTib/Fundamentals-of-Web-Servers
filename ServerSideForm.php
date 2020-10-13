<!DOCTYPE html>
    <html>
        <body>
            <?php
                if (empty($_POST['fname'])) {
                    $fnamerr = "First name is required";
                } else {
                 $firstname = test_input($_POST['fname']);
                }

                if (empty($_POST['lname'])) {
                    $lnamerr = "Last name is required";
                } else {
                    $lastname = test_input($_POST['lname']);
                }

                if (empty($_POST['age'])) {
                    $agerr = "Age is required";
                } else {
                    $age = test_input($_POST['age']);
                }

                if (empty($_POST['experience'])) {
                    $experr = "This field is required";
                } else {
                    $exp = test_input($_POST['experience']);
                }
                    
                if (empty($_POST['experience']) && ($_POST['depressed']) && ($_POST['idealhuman'])) {
                    $experr = "At least one field is required";
                } else {
                    $exp = test_input($_POST['experience']);
                }
           
                $busy = test_input($_POST['fname']);
                $depressed = test_input($_POST['depressed']);
                $idealhuman = test_input($_POST['idealhuman']);

                $checkbox_array = array($busy, $depressed, $idealhuman);
                    
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                echo "Welcome " . $firstname . "<br>"; 
                echo "Your last name is " . $lastname . "<br>";       
                echo "It is good to know that you are " . $age . " years old.<br><br>"; 

                echo "You said: ";        
                if ($exp == "dog") {
                    echo "I have/had a dog and want another<br>";
                } elseif ($exp == "nodog") {
                    echo "I never had a dog, but I want one<br>";
                } else {
                    echo "I am here to explore<br>";
                }

                    
                function CheckboxValidation() {
                    $i = "";
               
                    for($i=0;$i<3;$i++) {
                        if ((isset($checkbox_array[i])) && ($checkbox_array == "busy")) {
                            echo "I work am full time worker/student<br>"; 
                        } elseif ((isset($checkbox_array[i])) && ($checkbox_array == "depressed")) {
                            echo "I am feeling lonely and seeking companionship<br>";
                        } elseif ((isset($checkbox_array[i])) && ($checkbox_array == "idealhuman")) {
                            echo "I have at least 30 minutes of free time every day<br>";
                        }
                    }
                }
            ?>
        </body>
    </html>
