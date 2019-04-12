

<?php
// SESSIONS carry data on multiple pages
    // the data is stored on the server
    // cookies is stored on the users-computer 


    if(isset($_POST['submitButtonPressed'])){
        // echo "the submit-button has been pressed";
        session_start(); // display on every page
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('location: page2.php');  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SESSIONS 1</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter your Name">
        <br>
        <input type="email" name="email" placeholder="Enter your E-mail">
        <br>
        <input type="submit" name="submitButtonPressed" value="Submit">
    </form>
</body>
</html>