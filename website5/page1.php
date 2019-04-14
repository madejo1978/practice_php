<?php 
if(isset($_POST['submitButtonPressed'])){
$username = htmlentities($_POST['username']);

// name of the cookie, value, expiration(= 1 hour)
setcookie('username', $username, time()+3600 );

header('Location: page2.php');

}

?>

<!DOCTYPE html>
<head>
    <title>COOKIES page 1</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="username">
        <br>
        <input type="submit" name="submitButtonPressed" value="Submit">
    </form>
</body>
