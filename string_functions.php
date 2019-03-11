<?php
# substr()
    // returns a preselected part of a string

    $output = substr('HELLO', 1, 3); // returns ELL
    $output2 = substr('HELLO', -2); // returns LO
    
    echo $output . '<br>';
    echo $output2 . '<br>'; 
 
    
# strpos()
    // finds the position of a letter, by counting from 0

    $output3 = strpos('Hello World', 'o'); // returns 4
    echo "$output3 <br>";

# trim()
    // deletes the whitespace
    // use it for form-input 

    $output4 = 'trim()            '; // gives a big return because of the whitespaces
    var_dump($output4); 
    echo '<br>';

    $output5 = trim($output4); // declare function trim()
    var_dump($output5); // gives a return without the whitespaces
    echo '<br>';

#strtoupper()
    // makes all the strings uppercase

    $output6 = strtoupper('Hello World');
    echo $output6 . '<br>';

#strtolower()
    // makes all the strings lowercase

    $output7 = strtolower('Hello World');
    echo $output7 . '<br>';

#ucwords()
    // capitalizes Every Word

    $output8 = ucwords('Hello World');
    echo $output8 . '<br>';

#str_replace()
    // search and replace a part of a string

    $text = ucwords('Hello World');
    $output9 = str_replace('World','Martin', $text); // i.c. replaces World to Martin
    echo $output9 . '<br>';

#is_string()
    // check if string
    // returns a boolean answer: 1 = true noting = false 

    // single value
    $val = '22';
    $output10 = is_string($val);
    echo $output10 . '<br>';

    // array, loop trough an array with foreach
    $array = [true, false, null, 'Martin', 33, '33', 22.4, '22.4', '', 0, '0']; 

    foreach($array as $output11){
        if(is_string($output11)){                   // if each $output11 is a string
            echo "{$output11} is a string <br>";    // then echo $output11
        }
    }

#gzcompress()
    // compress a string in compressed format

    $zip =

    'Ipsum sint in ex reprehenderit veniam sit minim. Duis deserunt aute quis quis mollit consequat Lorem ex commodo do irure. Nulla laborum ipsum elit ad ipsum esse consequat ullamco voluptate. Nostrud Lorem anim officia ullamco exercitation sint voluptate consequat. Ullamco cillum magna sint irure tempor ut labore qui labore veniam ex sit.';

    $output11 = gzcompress($zip);
    echo $output11 . '<br><br>';

#gzuncompress()
    // back to the original

    $original = gzuncompress($output11);
    echo $original;

?>