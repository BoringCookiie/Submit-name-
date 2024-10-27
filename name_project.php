<?php 
    $name = ""; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP PROJECT</title>
</head>
<body>
    <center>
        <font face="Times New Roman" size="3" color="#ff0000">
            <h1>Hello there, Welcome!</h1>
        </font>
    </center>
    <br><br>
    <center>   
        
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Enter your name" size="10" maxlength="30" required>
            <input type="submit" value="Submit">
        </form>
    </center>
    <br>

    <?php if (!empty($name)): ?>
        <center>
            <h2>Your name is <?php echo $name; ?></h2>
        </center>
    <?php endif; ?>

    <center><h3><i> Made with love by Aicha ❤️ </i></h3></center>
</body>
</html>
