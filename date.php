<?php

// DOCUMENTATION http://php.net/manual/en/function.date.php

#Date
    // d Day
    // m Month
    // y Year
    // l Day of the week

    echo date('d') . '<br>';
    echo date('m') . '<br>';
    echo date('y') . '<br>';
    echo date('l') . '<br>';

    echo date('Y/m/d') . '<br>';
    echo date('m-d-Y') . '<br>';

#Time
    // h Hour
    // i Min
    // s Seconds
    // a AM or PM

    echo date('h') . '<br>';
    echo date('i') . '<br>';
    echo date('s') . '<br>';
    echo date('a') . '<br>';

    // set time zone
    date_default_timezone_set('Asia/Jakarta');
    // combination
    echo date('h:i:s a') . '<br>';

#UNIX time
// mktime(hour,minute,second,month,day,year,is_dst);
    // mktime() gives a string of numbers a.k.a. the current time as a Unix timestamp
    // convert the timestamp with the function date()
    // parameter1:format parameter2: variable timestamp

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    echo $timestamp . '<br>'; 
    echo date('m/d/Y h:i:sa', $timestamp) . '<br>'; 

    // function stringtotime
    $timestamp2 = strtotime('6:30am April 2 1978'); 
    echo $timestamp2 . '<br>';                                   // string
    echo date('d-m-Y h:i:sa', $timestamp2) . '<br>';              // convert into a readable format                        
        
        // has a built in parameter for the future
        $timestamp3 = strtotime('tomorrow');
        echo $timestamp3 . '<br>';                              // string
        echo date('d-m-Y h:i:sa', $timestamp3) . '<br>';        //  convert into a readable format
        
        $timestamp4 = strtotime('next Sunday');
        echo $timestamp4 . '<br>';                              // string
        echo date('d-m-Y h:i:sa', $timestamp4) . '<br>';        //  convert into a readable format
        
        $timestamp5 = strtotime('+2 Months');           
        echo $timestamp4 . '<br>';                              // string
        echo date('d-m-Y h:i:sa', $timestamp5) . '<br>';        //  convert into a readable format
?>
