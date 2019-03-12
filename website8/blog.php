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

<?php include('inc/header.php') ?>

    <div class = "container">
        <h1><?php echo $blog['title']; ?></h1>
        <div class = "jumbotron">         
            <small>Created on <?php echo $blog['created_at']; ?> by
            <?php echo $blog['author']; ?></small>
            <p><?php echo $blog['body']; ?></p>
            <a class = "btn btn-outline-secondary" href="<?php echo constant("ROOT_URL"); ?>">Back to Blogs-index</a> <!-- root is specified in config/config.php -->
        </div>
    </div>

<?php include('inc/footer.php') ?>