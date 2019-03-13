<?php require ('config/config.php');      
require ('config/db.php');      
/////////////////////
// SINGLE BLOG-POST
/////////////////////

// Activate the Submit-button, so the data can be send to the database
if(isset($_POST['delete'])){
    // check with echo if the Delete-button works
        // echo 'Halleluja the Delete-button works!';

    // Delete the blog using the id inputted in the hidden-form (see below: "name") in a variable
    $delete_id  = mysqli_real_escape_string($conn, $_POST['delete_id']);
    
    // Use the query to delete the blog from the database
    $query = "DELETE FROM blogs WHERE id = '$delete_id'";
    // var_dump($query);

    // if connection with the database, then put the query in the database
    if(mysqli_query($conn, $query)){
        // if deleted, then redirect to index.php
        header('Location:' . ROOT_URL);
        } else {
            // echo the error-code
            echo '<br>' . 'Failed to delete this Blog from the Database' . '<br>'; 
            echo 'MySQLI error code is' . ' ' . mysqli_error($conn); 
    }  
}

// get unique id
$id = mysqli_real_escape_string($conn, $_GET['id']); // Escapes special characters in a string for use in an SQL statement
// echo $id;

$query = 'SELECT id, title, body, author,created_at FROM blogs WHERE ID= ' . $id; // query tested in SQL

// get data with the query
    $result = mysqli_query($conn, $query);   

// fetch data, and convert it to an array
    $blog = mysqli_fetch_array($result, MYSQLI_ASSOC);   // returns "! one post" and returns it in an array
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
            <a class = "btn btn-outline-secondary" href="<?php echo constant("ROOT_URL"); ?>editblog.php?id=<?php echo $blog['id']; ?>">Edit Blog</a> <!-- root is specified in config/config.php -->
        
            <form class="float-right" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="delete_id" value="<?php echo $blog['id']; ?>">
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>

<?php include('inc/footer.php') ?>