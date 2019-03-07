<?php
    
        $email = $_POST["user_email"];    
        $user_password = $_POST["user_password"];  
     
    include "db_connection.php";
    
    #prepared statements
    /* 
        - sql syntax for the prepared statement  
        - named placeholders in the values
        - create variable "statement" $stmt
        -   : use database-handler with function prepare(), parameter is the sql-syntax 
        - use function bindParam() to bind the prepared statement       
        - function bindParam(): first argument is placeholder, second argument is the variable data when you execute the prepared statement 
        - declare variables: in this example already declared 
        - function execute()

        # re-usable
            - you only have to change the variable data
    */

    try {  
        $sql = "INSERT INTO users (user_email, user_password)
        VALUES (:email, :user_password)";                // named placeholders
        $stmt = $db_connection->prepare($sql);               // create variable & run function prepare()
                                                             // $db_connection->exec($sql);
        $stmt->bindParam(':email', $email);             // function bindParam():1 placeholder / 2 variabel-data
        $stmt->bindParam(':user_password', $user_password);  // function bindParam():1 placeholder / 2 data in variabels
        $stmt->execute();                                    // function execute()
                                                                // the variable are already declared on top of the page:
                                                                    //  $email = $_POST["user_email"];    
                                                                    //  $user_password = $_POST["user_password"];  
        echo "Your new account has been created <br/>";
        echo "Welcome " . $email;
        }

            catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;

// header("Location: ../index-login.php");  

?>