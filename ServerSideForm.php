<!DOCTYPE html>
<html>
    <head>
        <script src="Javascript.js"></script>
    </head>
            <body>
                Welcome <?php echo htmlspecialchars($_POST['fname']) . htmlspecialchars($_POST['lname']); ?>!<br>
                It is good to know that you are <?php echo $_POST['age']; ?>years old.<br><br>

                You said: "<?php echo htmlspecialchars($_POST['experience']); ?>"<br>
        
                <?php if (htmlspecialchars($_POST['experience']) == "dog"): ?>
                    I have/had a dog and want another
                <?php elseif (htmlspecialchars($_POST['experience']) == "nodog"): ?>
                    I never had a dog, but I want one
                <?php else: ?>
                    I am here to explore
                <?php endif; ?>
                
                <?php
                    echo "<script>CheckboxValidation();</script>";
                ?>
            </body>
</html>
