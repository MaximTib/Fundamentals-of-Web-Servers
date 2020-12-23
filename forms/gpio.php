<!DOCTYPE html>
<html>
    <head></head>
        <body style="background-color:lightgrey;">
            <h1>Welcome to "Play with GPIO"</h1>
            <h2>Flip some switches and see what they do</h2>
                <form action="gpio.php">
                    <input type="radio" id="LEDON" name="LEDstate" value="ON">
                    <label for="LEDON">LED HIGH</label><br>
                    <input type="radio" id="LEDOFF" name="LEDstate" value="OFF">
                    <label for="LEDOFF">LED LOW</label><br>
                    <input type="submit">
                </form>

                <div>
                <p onmouseover="BackColor()">
                <?php 
                function BackColor() {
                    $output = shell_exec('gpio mode 1 in');
                    echo "<div>$output</div>";
                    $output = shell_exec('gpio mode 2 in');
                    echo "<div>$output</div>";
                    $output = shell_exec('gpio mode 3 in');
                    echo "<div>$output</div>";
                    $output = shell_exec('gpio mode 4 in');
                    echo "<div>$output</div>";
                
                    $pin4 = shell_exec('gpio read 4'); 
                    //$pin3 = shell_exec('gpio read 3');
                    //$pin2 = shell_exec('gpio read 2');
                   // $pin1 = shell_exec('gpio read 1');

                    if ($pin4==0) { //&& $pin3==0 && $pin2==1 && $pin1==1) {
                        return '"style="background-color:Orange;"';
                    } //elseif ($pin4==0 && $pin3==1 && $pin2==1 && $pin1==1) {
                    //    return '"style="background-color:Violet;"';                       
                    //} elseif ($pin4==1 && $pin3==1 && $pin2==1 && $pin1==0             ) {
                    //    return '"style="background-color:Yellow;"';                       
                    //} elseif ($pin4==1 && $pin3==0 && $pin2==0 && $pin1==0) {
                    //    return '"style="background-color:Blue;"';   
                    else {
                        return '"style="background-color:Blue;"';
                    }
                }?>
                </p>
                </div>
                <br/>
                Choose a color to display as background of your submission form by selecting the correct binary code on the switches.
                <br/>Orange = 3
                <br/>Violet = 7
                <br/>Yellow = 14
                <br/>Blue = 8
                <br/>

                <?php
                $output = shell_exec('gpio mode 8 out');
                echo "<div>$output</div>";
                if ($LED == "ON") {
                    LED_HIGH();
                } elseif ($LED == "OFF") {
                    LED_LOW();
                }
                ?>

        </body>
</html>