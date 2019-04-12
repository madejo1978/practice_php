<?php 
    session_start();

    // display other text if session is not set, otherwise you wil get an error
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Name is not set';
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SESSIONS 3</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>

</body>
</html>