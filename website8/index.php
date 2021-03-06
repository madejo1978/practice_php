<?php require ('config/config.php');      // require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. 
  require ('config/db.php');       

$query = 'SELECT id, title, body, author,created_at FROM blogs ORDER BY created_at DESC'; // query tested in SQL
// mysql_query() has 2 parameters: an SQL-query, link_identifier (=db connection)

// convert it in a php-format and put in the variable $result
    $result = mysqli_query($conn, $query);  // mysqli_query() will return a mysqli_result object.   
// convert to an array
    $blogs = mysqli_fetch_all($result,MYSQLI_ASSOC);   // As mysqli_fetch_all() returns all the rows as an array: parameter is for displaying every row as an array. 
   // var_dump($blogs);

// empty $result from the memory, not needed anymore, we are using $blogs      
    mysqli_free_result($result);
    //var_dump($blogs);

// close opened db-connection
    mysqli_close($conn);
?>

<?php include('inc/header.php') ?> 

   <div class = "container">
        <div class="title slideInRight"><h1>Blogs</h1></div>
        <?php foreach ($blogs as $blog) : ?>
            <div id="jumbotron-index" class="jumbotron slideInLeft">
                <h3><?php echo $blog['title']; ?></h3>
                <small>Created on <?php echo $blog['created_at']; ?> by
                <?php echo $blog['author']; ?></small>
                <p><?php echo $blog['body']; ?></p>
                <a class = "btn btn-outline-secondary" href="<?php echo constant("ROOT_URL"); ?>blog.php?id=<?php echo $blog['id']; ?>">Read More</a>
            </div>
        <?php endforeach; ?>
    </div>


    <script>
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"</script>


    <script
        src="http://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>
    
    <script 
        src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</body>
</html>