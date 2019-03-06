<?php
    #array: variable that holds multiple variables
    /* 
        - indexed
        - associative
        - multi-dimensional
    */

    // indexed
    $people = array ('Kevin', 'Jeremy', 'Sara' );
    $numbers = array (23, 55, 12);
    $onlyBrackets = ['Honda','Toyota','Ford'];
    $onlyBrackets[3] = 'BMW'; // add to an existing array

    // some important functions
    echo count($onlyBrackets);

    // echo $people [1]
    // echo $numbers [2]
    // echo $onlyBrackets [3]
    // print_r($onlyBrackets) 
        // echo specially to see what is in an array
    // var_dump($onlyBrackets)
        // echo specially to see what is in an array

    // associative arrays
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37 
         );
    $viceVersa = array(35 => 'Brad', 32 => 'Jose', 37 => 'William'
        );
    $people['Jill'] = 42; // add to an existing array    
    
    // echo $people['Brad'];  
    // echo $viceVersa[35];
    echo $people['Jill'];

    // Multidimensional arrays
        // array within an array
    $cars = array (
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12)
    );

    echo $cars[1][0] // two sets of brackets: first is Y-axis, second is x-axis 


?>