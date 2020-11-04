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

                
                                                                        //foreach
                if (isset($_POST['busy']) && test_input($_POST['busy']) == "busy") {
                    echo "I work am full time worker/student<br>"; 
                } 
                       
                if (isset($_POST['depressed']) && test_input($_POST['depressed']) == "depressed") {
                    echo "I am feeling lonely and seeking companionship<br>";
                } 
                       
                if (isset($_POST['idealhuman']) && test_input($_POST['idealhuman']) == "idealhuman") {
                    echo "I have at least 30 minutes of free time every day<br>";
                }

                $servername = "localhost";
                $username = "Maxim";
                $password = "123SQLpassword321";
                $dbname = "BasicUserInfo";

                //Create connection with database
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                //Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }



                $sql = "SELECT ID FROM PersonalData;";
                $result = mysqli_query($conn,$sql);
                
                //finding out the ID value to insert new values in database
                if (mysqli_num_rows($result)>0) {
                    //output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $dbID = $row["ID"];
                        $NewUserID = $dbID + 1;
                    } 
                }   else {
                echo "0 results";
                }

                $sql = "SELECT ID,first_name,last_name FROM PersonalData;";
                $result = mysqli_query($conn,$sql);                
                
                //finding out the ID value to insert new values in database
                function CheckForRecords(){
                    if (mysqli_num_rows($result)>0) {
                    //output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            if ($row["first_name"] == $firstname && $row["last_name"] == $lastname) {
                                $UserID = $row["ID"];
                                $sqlupdate = "UPDATE PersonalData SET age = $age WHERE ID = $UserID;";
                                $resultupd = mysqli_query($conn,$sqlupdate);
                                echo $resultupd;
                                return true;
                            } else {
                                return false;
                            }
                        }   
                    }
                }

                $Existance = CheckForRecords();

                if ($Existance == false && mysqli_num_rows($result)>0) {
                    $sql = "INSERT INTO PersonalData VALUES ($NewUserID, '$first_name', '$last_name', $age);";
                    $CreateEntry = mysqli_query($conn,$CreateEntry);
                    $UserID = $row["ID"];
                    $CreateEntry;
                }
               
   
                $sql = "SELECT ID,first_name,last_name,age FROM PersonalData;";
                $result = mysqli_query($conn,$sql);

                //finding out the ID value to insert new values in database
                if (mysqli_num_rows($result)>0) {
                    //output data of each row
                    while($row = mysqli_fetch_assoc($result) && $row["ID"] == $UserID) {
                        echo "id: " . $row['ID']. " - Name: " . $row['first_name']. " " . $row['last_name']. " - Age: " . $row['age']. "<br></br>";
                    }
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);

            ?>
        </body>
    </html>
