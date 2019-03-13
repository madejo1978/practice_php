<?php 

    /* 
    #variables
        - prefix $
        - start with a letter or a underscore
        - only use letters, numbers or a underscore (parse error)
        - case sensitive (undefied variable)

    */
/* 
    #data types
    -  strings (numeric value, if you use + instead of . )
    -  integers
    -  floats
    -  booleans
    -  arrays
    -  objects
    -  null 
    */
    $output = 'Hello World!';

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $string3 = 'They\'re Here'; /* parse error: syntax error, use \ or double quotes */ 

    $float1 = 4.14;
    $bool1 = true;

    /* concatinate */
    $greeting = $string1 . ' ' . $string2;
    /* single quotes give a string output */
    $greeting2 = "$string1 $string2";

    /* constant  
    - normal to give them all uppercase
    - you can echo an constant by reffering to the first parameter
    */
    define('GREETING', 'hello everyone');
    echo GREETING

    

?>