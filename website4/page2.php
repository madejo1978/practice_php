<?php 
    session_start();
    
    // print the content the array
    print_r($_SESSION);
    
    // you can change the name at anytime
        // for example (without using a form)
        $_SESSION['name'] = 'ARTRITUS PSORIASIS';
        unset($_SESSION['name']);

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SESSIONS 2</title>
</head>
<body>
    <h5>
        NAME: <?php echo '&nbsp;' . $name; ?>
        <br>
        EMAIL: <?php echo $email; ?>
    </h5>
    <a href="page3.php">Link to Page 3</a>
</body>
</html>