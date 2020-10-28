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
                    echo "I am here to explore<br><br>";
                }

                
                $busy = $_POST['busy'];
                $depressed = $_POST['depressed'];
                $idealhuman = $_POST['idealhuman'];
               
                                                                        //foreach
                if (isset($busy) && test_input($busy) == "busy") {
                    echo "I work am full time worker/student<br>"; 
                } 
                       
                if (isset($depressed) && test_input($depressed) == "depressed") {
                    echo "I am feeling lonely and seeking companionship<br>";
                } 
                       
                if (isset($idealhuman) && test_input($idealhuman) == "idealhuman") {
                    echo "I have at least 30 minutes of free time every day<br>";
                }


                $servername = "localhost";
                $username = "Maxim";
                $password = "123SQLpassword321";
                $dbname = "BasicUserInfo";

                //Create connection with database
                $conn = mysqli_connection($servername, $username, $password, $dbname);
                //Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "SELECT ID FROM PersonalData;";
                $result = mysqli_query($conn,$sql);
                $dbID = mysqli_num_rows($conn,$sql);
                
                //finding out the ID value to insert new values in database
                $i = "";
                for($i=0; $i<=$dbID; $i++) {
                    if( $i == $dbID ) {
                        $InsertID = $dbID + 1;
                    }
                }
                
                //Inserting data in the database
                $sql_insert = "INSERT INTO PersonalData values ($InsertID, '$firstname', '$lastname', $age);";
                $sql_insert;

                //displaying data from database to user
                $sql_out_id = "SELECT ID FROM PersonalData WHERE ID = $InsertID;";
                echo "Your ID is " . $sql_out_id . "<br></br>";
                $sql_out_fname = "SELECT first_name FROM PersonalData WHERE ID = $InsertID;";
                echo "Your recorded first name is " . $sql_out_fname . "<br></br>";
                $sql_out_lname = "SELECT last_name FROM PersonalData WHERE ID = $InsertID;";
                echo "Your recorded last name is " . $sql_out_lname . "<br></br>";
                $sql_out_age = "SELECT age FROM PersonalData WHERE ID = $InsertID;";
                echo "Your age is " . $sql_out_age . "<br></br>";

                mysqli_close($conn);

            ?>
        </body>
    </html>
