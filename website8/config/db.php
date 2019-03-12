<?php
// create connection with the database
$conn = mysqli_connect('localhost', 'root','','phpblog');         // host / user / password / database-name, see also http://php.net/manual/en/function.mysqli-connect.php

// check connection 
if(mysqli_connect_errno()){                 
// if true: connection is failed:
    echo '<br>' . 'Failed to connect to the Database BLOGS' . '<br>'; 
    echo 'MySQLI error code is' . ' ' . mysqli_connect_errno();   // This function returns the error code from last connect call
}



?>