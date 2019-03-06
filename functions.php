<?php
    # FUNCTIONS: block of code that can be called repeatedly
        # you can als use parameters (sometimes called arguments), basically values you plug in the function 

    /* 
        Camel Case: myFunction();
        Lower Case: my_function();
        Pascal Case: MyFunction(); // is usually used for classes

    */

    // create
    function simpleFunction(){
        echo 'Hello World';
    }
    
        // run
        simpleFunction();

    // function with parameter
    function sayHello($name){
        echo "Hello $name<br>";
    }

    // function with parameter and with a default value
    function sayHello2($name = 'World'){
        echo "Hello $name<br>";
    }

        // run
        sayHello('Martin'); // if empty, gives an Uncaught ArgumentCountError
        sayHello2('Dusan Tadic'); // if empty, gives the default value Dusan Tadic  
    
    // function with multiple parameters
    /* function addNumbers($num1, $num2){ 
        echo $num1 + $num2;
    }

    addNumbers(2,3);
 */
/* 
    // same function with return (instead of echo)
    function addNumbers($num1, $num2){ 
        return $num1 + $num2; // it returns a value, with this value you have to do something, for example echo 
    }

    echo addNumbers(5,6); // echo
 */    

    // function passing arguments by reference (isn't used very often)

    $myNum = 10; // outside the function the value will not change, but you can passed it in by reference

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){  // include a &
        $num +=10;
    }
        #run the number through both functions (this is the "by reference element")

        addfive($myNum);
        echo "The current calculation plus 5 is $myNum <br>";
        
        addTen($myNum);
        echo "The current calculation plus 10 is $myNum <br>";

?>
