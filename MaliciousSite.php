<!DOCTYPE html>
<html>
    <head></head>
        <body>
            <?php
                 $search = test_input($_POST['search']);
                
                 function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                $ip = $_SERVER['REMOTE_ADDR'];

                header('Location: https://www.google.com/');

                $servername = "localhost";
                $username = "Maxim";
                $password = "123SQLpassword321";
                $dbname = "finalexam";

                //Create connection with database
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                //Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT ID FROM attacker;";
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


                if  ((mysqli_num_rows($result)>0)) {
                    $sql = "INSERT INTO attacker VALUES ($NewUserID, '$ip', '$searach');";
                    $CreateEntry = mysqli_query($conn,$sql);
                    $CreateEntry;
                }
               

   
         //       $sql = "SELECT ID,IP,Search FROM finalexam;";
         //       $result = mysqli_query($conn,$sql);

                //finding out the ID value to insert new values in database
         //       if (mysqli_num_rows($result)>0) {
                    //output data of each row
         //           while($row = mysqli_fetch_assoc($result)) {
         //               if($row['ID'] == $UserID || $row['ID'] == $NewUserID) {
         //               echo "<br></r> ID: " . $row['ID'] . " - IP: " . $row['IP'] . " - Search: " . $row['age'] . "<br></br>";
         //               }
         //            } 
         //        } else {
         //            echo "0 results";
         //        }

                mysqli_close($conn);
            ?>
        </body>
</html>