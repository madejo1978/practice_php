<?php require ('config/db.php');      // require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. 

$query = 'SELECT id, title, body, author,created_at FROM blogs'; // query tested in SQL
// mysql_query() has 2 parameters: an SQL-query, link_identifier (=db connection)

// convert it in a php-format and put in the variable $result
    $result = mysqli_query($conn, $query);  // mysqli_query() will return a mysqli_result object.   
// convert to an array
    $blogs = mysqli_fetch_all($result,MYSQLI_ASSOC);   // As mysqli_fetch_all() returns all the rows as an array: parameter is for displaying every row as an array. 
   // var_dump($blogs);

// empty $result from the memory, not needed anymore, we are using $blogs      
    mysqli_free_result($result);
    var_dump($blogs);

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
    <h1>Blogs</h1>
    <?php foreach ($blogs as $blog) : ?>
        <div class="row">
            <h2><?php echo $blog['title']; ?></h2>
            <h6>Created on <?php echo $blog['created_at']; ?> by
            <?php echo $blog['author']; ?></h6>
            <p><?php echo $blog['body']; ?></p>
        </div>
    <?php endforeach; ?>


</body>
</html>