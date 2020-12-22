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
                <label for="opt1">I am a full time worker/student</label><br>
                <input type="checkbox" id="depressed" name="depressed" value="depressed">
                <label for="opt2">I am feeling lonely and seeking companionship</label><br>
                <input type="checkbox" id="idealhuman" name="idealhuman" value="idealhuman">
                <label for="opt3">I have at least 30 minutes of free time every day</label><br>
                <input type="submit"><br><br><br>
            </form>
        </body>
</html>