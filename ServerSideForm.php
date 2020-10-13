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
                    
                if (empty($_POST['busy']) && empty($_POST['depressed']) && empty($_POST['idealhuman'])) {
                    $experr = "At least one field is required";
                } else {
                    $exp = test_input($_POST['experience']);
                }
                

                

                
                    
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

                
                $busy = $_POST['busy'];
                $depressed = $_POST['depressed'];
                $idealhuman = $_POST['idealhuman'];
               
                                                                        //foreach
                if ((isset($busy) && (test_input($busy) == "busy")) {
                    echo "I work am full time worker/student<br>"; 
                } 
                       
                if ((isset($depressed) && (test_input($depressed) == "depressed")) {
                    echo "I am feeling lonely and seeking companionship<br>";
                } 
                       
                if ((isset($idealhuman) && (test_input($idealhuman) == "idealhuman")) {
                    echo "I have at least 30 minutes of free time every day<br>";
                }
                   
        
            ?>
        </body>
    </html>
