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
<!--  
PHP-documentation
filter_validate: boolean, email, float, int, ip, regxp, url
filter_sanitize: email, encoded, number_float, number_int, special_char, string, url

-->


<!-- function() that check for POST or GET values (instead ifisset, POST data) -->
<?php 
/* 
// check for posted data (in the form below) 
if(filter_has_var(INPUT_POST, 'data')){echo 'Data found in form with POST or GET';

}else{
    echo 'No Data found in form with POST or GET';
}
 */

if(filter_has_var(INPUT_POST, 'data')){
 $email = $_POST['data'];

   // filter which removes wrong characters
 $email = filter_var($email, FILTER_SANITIZE_EMAIL);
 echo 'This is the sanitized email:' . $email . '<br>' . ' => ';
   
    if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
        echo "this e-mail is correctomundo!";
    } else {
        echo "this e-mail is NOT correct";
    }  
 echo '<br>';   
}

// filter integer
$var = 'madejo';

if(filter_var($var, FILTER_VALIDATE_INT)){
    echo $var . ' is a number';
} else {
    echo $var . ' is NOT a number';
}
echo '<br>';

// sanitize integers
$var = '2389729742afkjafhjk29023';
var_dump (filter_var($var,FILTER_SANITIZE_NUMBER_INT));
echo '<br>';

// sanitize 
$var_script = '<script>alert("Just put a script in your code B!")</script>';
// echo $var_script;
echo filter_var($var_script, FILTER_SANITIZE_SPECIAL_CHARS);
echo '<br>' . '<br>';

// filter array: pre-filter data to insert into the arrays 
$filters = array (
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array (
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
            )
    )
        );

print_r(filter_input_array(INPUT_POST, $filters));
echo '<br>' . '<br>';


// more array-filters
$arr = array (
    "name" => "John Doe",
    "age" => "69",
    "email" => "JohnDoe@gmail.com"
);

$filters = array(
"name" => array(
    "filter" => FILTER_CALLBACK,
    "options" => "ucwords" // ucwords — Uppercase the first character of each word in a string 
    ),
    "age" => array (
        "filter" => FILTER_VALIDATE_INT,
        "options"=> array(
        "min_range" => 1,   
        "max_range" => 120
    )
    ),
    "email" => FILTER_VALIDATE_EMAIL
);

print_r(filter_var_array($arr, $filters));

?>



<!-- superGlobal for echo-ing the current page    -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>



