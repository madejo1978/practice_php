<?php
#CONDITIONALS Test & Compare 

/* 
    ==  testing value, not data type
    === identical
    <
    >
    <=
    >=
    !=
    !==

*/

/*     $num = 7; // '5' is a string, therefore === will not work in this example

    if($num === 5){
        echo $num . ' passed';
    
    } elseif($num == 6){                // is only executed if the preceding if expression is false, and a the current elseif expression is TRUE => then it will run
        echo $num . ' passed';
    } 
    
    else {
        echo $num . ' did not pass';
        echo "$num did not pass";
    } */

#NESTING IF
    $num = 11;                        

    if($num > 4){
        if($num < 10){                  // you can nest unlimited if statements 
            echo "$num passed <br>";
        } else {
            echo "$num doesn't match the formula in the nesting if <br>";
        }
    }
                        
    /* 
    it is better to use LOGICAL OPERATORS

        - and &&
        - or ||
        - xor (one has to be true, not both)
    */      
    
    if ($num > 4 && $num < 10){
            echo "$num passed logical operator <br>";
    } else {
        echo "$num doesn't match the formula with logical operators <br>";
    }

    #SWITCH 
    /* test a value and test this value with different cases 
 */

    $favColor = 'orange';

    switch($favColor){
        case 'red':
        echo 'Your favorite color is red';
        break;
    
        case 'white':
        echo 'Your favorite color is white';
        break;
    
        case 'blue':
        echo 'Your favorite color is blue';
        break;
    
        default:
        echo 'Your favorite color is not in our database';
    }

?>