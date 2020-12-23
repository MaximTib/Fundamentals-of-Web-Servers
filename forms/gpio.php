<!DOCTYPE html>
<html>
    <head></head>
        <body style="background-color:lightgrey;">
            <h1>Welcome to "Play with GPIO"</h1>
            <h2>Flip some switches and see what they do</h2>
                <form action="gpio.php" method="post">
                    <input type="radio" id="LEDON" name="LEDstate" value="ON">
                    <label for="LEDON">LED HIGH</label><br>
                    <input type="radio" id="LEDOFF" name="LEDstate" value="OFF">
                    <label for="LEDOFF">LED LOW</label><br>
                    <input type="submit">
                </form>

                <div>
                <p onmouseover="BackColor()">Choose a color to display as background of your submission form by selecting the correct binary code on the switches.
                <br/>
                <br/>Orange = 3
                <br/>Violet = 7
                <br/>Yellow = 14
                <br/>Blue = 8
                <br/>
                </p>
                </div>

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

                <h3><br/>Go fill out the form</h3>
                <button type="button"  onclick="window.location.href = 'Form_page.html';">Click to go back to the form</button>
        </body>
</html>