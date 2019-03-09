<?php
    if(isset($_GET['name'])){
    // echo $_GET['name'];
    $name = htmlentities($_GET['name']);
    // echo "<br> $name";
    // print_r($_GET); 
    } 
    
/*     if(isset($_POST['name'])){
    echo $_POST['name'];
    $name = htmlentities($_POST['name']);
    // echo "<br> $name";
    print_r($_POST); 
    } */

    /* if(isset($_REQUEST['name'])){
    echo $_REQUEST['name'];
    $name = htmlentities($_POST['name']);
    // echo "<br> $name";
    // print_r($_POST); 
    } */
/* 
    echo $_SERVER['QUERY_STRING'];
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET & POST</title>
</head>
<body>
    <!-- Form 
        -  name attribute is important 
        -  name hooks up with the server
        -  and get this data submitted
        - to process this form:
            1. method: GET or POST (and REQUEST, but the method stays on GET or POST)
            2. action: page you're going to submit to

        Isset
            - if a variable is nog yet set on the server, and you use POST or GET
            - it will give an error on the webpage: Undefined index:
                - you can check if 'a variable is set' with: isset
        
        Security PHP
            - cross-site scripting attacks (XSS): hackers use a form with a crazy script
            - to secure against XSS:
                - html-entities: takes out the power of the data in the HTML bragues
                - for example: htmlentities($_GET['name']);

        Query_string
            - only works with the GET-method
            - shows all the information of the sent query

        Href
            - you can also fetch variables without using a form  
        -->

<!-- FORM -->
    <form action="get_post.php" method="GET">
        <div>
            <label>Name</label><br>
            <input type = "text" name = "name">   
        </div>
        <div>
            <label>Email</label><br>
            <input type = "text" name = "email">   
        </div>
        <input type = "submit" value = "submit">
    </form> 

<!-- HREF --> 
    <ul>
        <li>
            <a href="get_post.php?name=Martinus">Martinus</a>
        </li>
        <li>
            <a href="get_post.php?name=James">James</a>
        </li>
    </ul>

    <h1><?php echo "{$name}'s Profile"; ?></h1>
    
<!-- QUERY STRING -->
    <?php echo $_SERVER['QUERY_STRING']; ?>
</body>
</html>