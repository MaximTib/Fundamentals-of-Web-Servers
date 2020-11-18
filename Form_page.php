<!DOCTYPE html>
<html>
<head>
    <script src="Javascript.js"></script>
</head>


<body>

    <h2>Form to fill out</h2>

    <form action="ServerSideForm.php" onsubmit="return (OnlyLetters(fname,lname) && NumOnly(age));" method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="1" max="200"><br><br>

        <div>Choose the statement that applies to you</div>

        <input type="radio" id="option1" name="experience" value="dog">
        <label for="option1">I have/had a dog and want another</label><br>
        <input type="radio" id="option2" name="experience" value="nodog">
        <label for="option2">I never had a dog, but I want one</label><br>
        <input type="radio" id="option3" name="experience" value="explore">
        <label for="option3">I am here to explore</label><br><br><br>

        <div>Choose all that apply to you</div>

        <input type="checkbox" id="busy" name="busy" value="busy">
        <label for="opt1">I work am full time worker/student</label><br>
        <input type="checkbox" id="depressed" name="depressed" value="depressed">
        <label for="opt2">I am feeling lonely and seeking companionship</label><br>
        <input type="checkbox" id="idealhuman" name="idealhuman" value="idealhuman">
        <label for="opt3">I have at least 30 minutes of free time every day</label><br>
        <input type="submit"><br><br><br>

        <input type="radio" id="LEDON" name="LEDstate" value="ON">
        <label for="LEDON">LED HIGH</label><br>
        <input type="radio" id="LEDOFF" name="LEDstate" value="OFF">
        <label for="LEDOFF">LED LOW</label><br>

        

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
                    $pin3 = shell_exec('gpio read 3');
                    $pin2 = shell_exec('gpio read 2');
                    $pin1 = shell_exec('gpio read 1');
                    if ($pin4==0 && $pin3==0 && $pin2==1 && $pin1==1) {
                        return "'style="background-color:Orange;'"';
                    } elseif ($pin4==0 && $pin3==1 && $pin2==1 && $pin1==1) {
                        return "'style="background-color:Violet;'"';                       
                    } elseif ($pin4==1 && $pin3==1 && $pin2==1 && $pin1==0) {
                        return "'style="background-color:Yellow;'"';                       
                    } elseif ($pin4==1 && $pin3==0 && $pin2==0 && $pin1==0) {
                        return ="'style="background-color:Blue;'"';                      
                    }?>
                }

            <br></br>
            Choose a color to display as background of your submission form by selecting the correct binary code on the switches.
            <br></be>Orange = 3
            <br></be>Violet = 7
            <br></be>Yellow = 14
            <br></be>Blue = 8
            <br></br>
        </p>
    </form>
    </div>

        


</body>

</html>