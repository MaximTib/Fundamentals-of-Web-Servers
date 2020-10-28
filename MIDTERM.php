<!DOCTYPE html>
    <html>
        <body>
            <?php
                
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
                
                //Select employee IDs and Names
                $sql = "SELECT EmployeeID, EmployeeName FROM Employees;";
                $result = mysqli_query($conn,$sql);

                if (mysqli_num_rows($result) > 0) {
                    //opt names of employees
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ( $row["EmployeeID"] == 1) {
                            $EmployeeName1 = $row["EmployeeName"];
                        } elseif  ( $row["EmployeeID"] == 2) {
                            $EmployeeName2 = $row["EmployeeName"];
                        } elseif  ( $row["EmployeeID"] == 3) {
                            $EmployeeName3 = $row["EmployeeName"];
                        } else {
                            echo "No Names";
                        }
                    }
                }
            ?>
         
                
            
            <p>
                <form>
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname"><br>

                    <label for="EmplNames">Choose an Employee:</label>
                    <select id="EmplNames" name="EmplNames">
                        <option value="Empl1"><?php echo $EmployeeName1; ?></option>
                        <option value="Empl2"><?php echo $EmployeeName2; ?></option>
                        <option value="Empl3"><?php echo $EmployeeName3; ?></option>
                    </select>
                    <input type="submit">
                </form>
            </p>

            <div id="username" onmouseover=Afunction()>
            </div>

            <script>
                function Afunction() {
                    firstname = document.getElementByID("fname");
                    lastname = document.getElementByID("lname");
                    document.getElementById("username").innerHTML = "Your name is" firstname lastname;
                }
            </script>
            
        </body>
    </html>
