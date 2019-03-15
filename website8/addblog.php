<?php 
    require ('config/config.php');      // require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. 
    require ('config/db.php');       
?>
    <?php include('inc/header.php'); ?> 

<?php
// Activate the Submit-button, so the data can be send to the database
    if(isset($_POST['submit'])){
        // check with echo if the Submit-button works
            // echo 'Halleluja the Submit-button works!';

        // Put the blog-data inputted in the form (see below: "name") in a variable
        $title  = mysqli_real_escape_string($conn, $_POST['title']);
        $body   = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        // Use the query to order the variables correctly for the database
        $query = "INSERT INTO blogs (title, body, author) VALUES ('$title', '$body', '$author')";
        // var_dump($query);

        // if connection with the database, then put the query in the database
        if(mysqli_query($conn, $query)){
            // if inserted, then redirect to index.php
            header('Location:' . ROOT_URL);
            } else {
                // echo the error-code
                echo '<br>' . 'Failed to input your new Blog into the Database' . '<br>'; 
                echo 'MySQLI error code is' . ' ' . mysqli_error($conn); 
        } 
    }

?>

   <div class = "container">
        <h1>Add a Blog</h1>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"><!-- Returns the filename of the currently executing script, i.c. addpost.php -->
            <div class="form-group"> 
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group"> 
                <label>Text</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="form-group"> 
                <label>Author</label>
                <input type="text" name="author" class="form-control">
            </div>
      
            <input class = "btn btn-outline-secondary" type="submit" name="submit" value="submit"> 
        </form>
    </div>

<?php include('inc/footer.php') ?>

