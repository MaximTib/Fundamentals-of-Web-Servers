<!DOCTYPE html>
<html>
    <head>
        <!----------function to display fonted text------->
                <script>
                function Color() {
                    var col = "<?= $color?>";
                    alert("color = "+ col +"");
                    if (col == 1) {
                        var text = "So you chose the color Orange!!";
                        var result = text.fontcolor("orange");
                        document.getElementById("gpio").innerHTML = result;
                    } else if (col == 2) {
                        var text = "So you chose the color Violet!!";
                        var result = text.fontcolor("violet");
                        document.getElementById("gpio").innerHTML = result;
                    } else if (col == 4) {
                        var text = "So you chose the color Yellow!! The best color of them all";
                        var result = text.fontcolor("orange");
                        document.getElementById("gpio").innerHTML = result;
                    } else if (col == 8) {
                        var text = "So you chose the color Blue!!";
                        var result = text.fontcolor("blue");
                        document.getElementById("gpio").innerHTML = result;
                    } else {
                        var result = "Oops! Looks like you chose the wrong switch combination!";
                        document.getElementById("gpio").innerHTML = result;
                    }
                }
                </script>
    </head>
        <!-------backgound color-------->
        <body style="background-color:lightgrey;">
            <h1>Welcome to "Play with GPIO"</h1>
            <h2>Flip some switches and see what they do</h2>
                <!---------form to turn LED ON and OFF---------->
                <form action="gpio.php" method="post">
                    <input type="radio" id="LEDON" name="LEDstate" value="ON">
                    <label for="LEDON">LED HIGH</label><br>
                    <input type="radio" id="LEDOFF" name="LEDstate" value="OFF">
                    <label for="LEDOFF">LED LOW</label><br>
                    <input type="submit">
                

                
                <!----------init the gpio ports on the pi---------->
                <?php 
                    $output = shell_exec('gpio mode 1 in');
                    echo "<div>$output</div>";
                    $output = shell_exec('gpio mode 2 in');
                    echo "<div>$output</div>";
                    $output = shell_exec('gpio mode 3 in');
                    echo "<div>$output</div>";
                    $output = shell_exec('gpio mode 4 in');
                    echo "<div>$output</div>";

                    //--------------read input from ports------------
                    $pin4 = shell_exec('gpio read 4'); 
                    $pin3 = shell_exec('gpio read 3');
                    $pin2 = shell_exec('gpio read 2');
                    $pin1 = shell_exec('gpio read 1');
     
                    //-------------assining a value to color based on inputs--------
                    if ($pin4==0 && $pin3==0 && $pin2==0 && $pin1==1) {
                        $color=1;
                    } elseif ($pin4==0 && $pin3==0 && $pin2==1 && $pin1==0) {
                        $color=2;                       
                    } elseif ($pin4==0 && $pin3==1 && $pin2==0 && $pin1==0) {
                        $color=3;                       
                    } elseif ($pin4==1 && $pin3==0 && $pin2==0 && $pin1==0) {
                        $color=4;                      
                    } else {
                        $color=0;
                    }
                ?>

                <div>
                <p id="gpio">Choose a color to display a fonted text instead of this one using the switches.</p>
                <button type="button" onclick="Color()">Activate</button>
                <br/>
                <br/>Orange = 1
                <br/>Violet = 2
                <br/>Yellow = 4
                <br/>Blue = 8
                <br/>
                </div>
                </form>

               


                <!----------php code to output high or low to the LED------------>
                <?php
                if (empty($_POST['LEDstate'])) {
                    $LEDerr = "";
                } else {
                    $LED = $_POST['LEDstate'];
                } 
                
                $output = shell_exec('gpio mode 8 out');
                echo "<div>$output</div>";
                if ($LED == "ON") {
                    LED_HIGH();
                } elseif ($LED == "OFF") {
                    LED_LOW();
                }
                
                function LED_HIGH() {
                    $output = shell_exec('gpio write 8 1');
                    echo "<div>$output</div>"; 
                }
         
                function LED_LOW() {
                    $output = shell_exec('gpio write 8 0');
                    echo "<div>$output</div>"; 
                }
                ?>

                <!-------button to go back to the form page----------->
                <h3><br/>Go fill out the form</h3>
                <button type="button"  onclick="window.location.href = 'Form_page.html';">Click to go back to the form</button>
        </body>
</html>