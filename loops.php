<?php
    # LOOPS - execute a codeset a number of times
        /* 
            For
            While
            Do While (not often used)
            Foreach (is meant to work with arrays)
        
        */

        # For Loop
            # parameters: initiator (=variable: usually $i), condition, increment
/* 
        for($i = 0; $i < 10 ;$i++){
            echo ' Number '. $i;
            echo '<br>';
            } */

        # While loop
            # parameters: only condition, setting the variable etc. happens outside of the loop
            /* 
            $i = 0; 

            while($i < 10){
                echo $i;
                echo '<br>';
                $i++;
            } */

        # Do While
            # parameters: the while takes a condition
            # al the actions happens in Do, therefore Do has the curly braces
            # always runs at least one time
/* 
            $i = 0;

            do {
                echo 'number ' . $i;
                echo '<br>';
                $i++;
            }

            while($i < 10);
 */
        # Foreach
            # name of the array, variable foreach one (singular form of the plural, i.c. person of people),     

            #Array
/*             $people = array('Brad', 'Jose', 'William');

            foreach($people as $person){
                echo $person;
                echo '<br>';
            } */

            #Associative array
                # key, value: you can choose (the name of) every variable you want
                # but key and value is the format when youre looping trough a associative array
                            // key     // value   
            $people = array('Brad' => 'brad@gmail.com' , 'Jose' => 'jose@gmail.com' , 'William' => 'william@gmail.com');

            foreach($people as $person => $email){ // $person = key and $email = value
                echo $person . ' : ' . $email;
                echo '<br>';
            }


?>  

