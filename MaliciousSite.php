<!DOCTYPE html>
<html>
    <head></head>
        <body>
            <?php
                //--------------retrieving the search-------------
                 $search = test_input($_POST['search']);
                
                 //-------------making the input is sanitized, cannot hack the hacker----------
                 function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                //--------------retrieving the ip of the remote device--------------------
                $ip = $_SERVER['REMOTE_ADDR'];


                //----------------redirecting user to the google search of the site---------------
                header('Location: https://www.google.com/');

                $servername = "localhost";
                $username = "Maxim";
                $password = "123SQLpassword321";
                $dbname = "finalexam";

                //------------Create connection with database---------------
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                //Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT ID FROM attacker;";
                $result = mysqli_query($conn,$sql);
                
                //-----------finding out the ID value to insert new values in database-----------
                if (mysqli_num_rows($result)>0) {
                    //------------output data of each row----------
                    while($row = mysqli_fetch_assoc($result)) {
                        $dbID = $row["ID"];
                        $NewUserID = $dbID + 1;
                    } 
                }   else {
                echo "0 results";
                }

                //------------------creating new entry in the table with new ID-----------------
                if  ((mysqli_num_rows($result)>0)) {
                    $sql = "INSERT INTO attacker VALUES ($NewUserID, '$ip', '$search');";
                    $CreateEntry = mysqli_query($conn,$sql);
                    $CreateEntry;
                }
               
                mysqli_close($conn);
            ?>
        </body>
</html>