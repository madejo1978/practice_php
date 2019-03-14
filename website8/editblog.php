<?php 
    require ('config/config.php');      // require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. 
    require ('config/db.php');       
?>
    <?php include('inc/header.php'); ?> 

<?php


// Activate the Submit-button, the data in the database will be updated
    if(isset($_POST['submit'])){
        
        // update the blog-data inputted in the form (see below: "name") in a variable
        $update_id  = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title      = mysqli_real_escape_string($conn, $_POST['title']);
        $body       = mysqli_real_escape_string($conn, $_POST['body']);
        $author     = mysqli_real_escape_string($conn, $_POST['author']);

        // Use the query to order the variables correctly for the database
        $query = "UPDATE blogs 
        SET title='$title', body='$body', author='$author'
        WHERE id = '$update_id'";
        // die($query); die is a good tool for debugging in this case

        // var_dump($query);

        // if connection with the database, then put the query in the database
        if(mysqli_query($conn, $query)){
            // if inserted, then redirect to index.php
            header('Location:' . ROOT_URL);
            } else {
                // echo the error-code
                echo '<br>' . 'Failed to update your Blog into the Database' . '<br>'; 
                echo 'MySQLI error code is' . ' ' . mysqli_error($conn); 
        } 
        
    }

// query to get the information from blog that has to be edited
    // I haved re-used the query from blog.php
   

$id = mysqli_real_escape_string($conn, $_GET['id']); 

$query = 'SELECT id, title, body, author,created_at FROM blogs WHERE ID= ' . $id; 

// get data with the query
    $result = mysqli_query($conn, $query);   

// fetch data, and convert it to an array
    $blog = mysqli_fetch_array($result,MYSQLI_ASSOC);   
    
// empty $result from the memory, not needed anymore, we are using $blog      
    mysqli_free_result($result);
    // var_dump($blog);

// close opened db-connection
    mysqli_close($conn);

?>

<!--  get the data from the variable $blog and echo it in the form "value" --> 
   <div class = "container">
        <h1>Edit this Blog</h1>
            <div class="jumbotron">
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"><!-- Returns the filename of the currently executing script, i.c. addpost.php -->
                    <div class="form-group"> 
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $blog['title']; ?>">
                    </div>
                    <div class="form-group"> 
                        <label>Text</label>
                        <textarea name="body" class="form-control"><?php echo $blog['body']; ?></textarea>
                    </div>
                    <div class="form-group"> 
                        <label>Author</label>
                        <input type="text" name="author" class="form-control" value="<?php echo $blog['author']; ?>">
                    </div>
                    <input type="hidden" name="update_id" value="<?php echo $blog['id']; ?>"> <!-- hidden input: often stores a database record that needs to be updated when the form is submitted.-->
                    <input class="btn btn-outline-secondary" type="submit" name="submit" value="submit"> 
                </form>
            </div>
    </div>

<?php include('inc/footer.php') ?>

