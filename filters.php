<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<!-- function() that check for POST or GET values (instead ifisset, POST data) -->
<?php 
// check for posted data (in the form below) 
if(filter_has_var(INPUT_POST, 'data')){echo 'Data found in form with POST or GET';

}else{
    echo 'No Data found in form with POST or GET';
}

?>

<!-- superGlobal for echo-ing the current page    -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>



