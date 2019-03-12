<?php require ('config/config.php');      
require ('config/db.php');      
/////////////////////
// SINGLE BLOG-POST
/////////////////////

// get unique id
$id = mysqli_real_escape_string($conn, $_GET['id']); // Escapes special characters in a string for use in an SQL statement
// echo $id;

$query = 'SELECT id, title, body, author,created_at FROM blogs WHERE ID= ' . $id; // query tested in SQL

// get data with the query
    $result = mysqli_query($conn, $query);   

// fetch data, and convert it to an array
    $blog = mysqli_fetch_array($result,MYSQLI_ASSOC);   // returns "! one post" and returns it in an array
    // var_dump($blog);

// empty $result from the memory, not needed anymore, we are using $blog      
    mysqli_free_result($result);
    //var_dump($blogs);

// close opened db-connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div class = "container">
        <a href="<?php echo constant("ROOT_URL"); ?>">Back to Blogs-index</a> <!-- root is specified in config/config.php -->
        <h1>Blogs</h1>
        <h2><?php echo $blog['title']; ?></h2>
        <h6>Created on <?php echo $blog['created_at']; ?> by
        <?php echo $blog['author']; ?></h6>
        <p><?php echo $blog['body']; ?></p>
    </div>
</body>
</html>