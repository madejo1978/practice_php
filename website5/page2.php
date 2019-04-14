<?php

// change cookie for a day
setcookie('username', "Activate Cookie without using a 'Form'", time() + (86400 * 30) );

// delete cookie
// setcookie('username', "Activate Cookie without using a 'Form'", time() - 3600);

// check if there are cookies active
if(count($_COOKIE) > 0){
    echo 'There are ' . count($_COOKIE) . ' cookies active' . '<br>';
} else {
    echo 'There are no cookies active';
}

if(isset($_COOKIE['username'])){
    echo 'Welcome ' . $_COOKIE['username'] . '<br>' . ' Your cookie is active' . '<br>';
} else {
    echo 'The cookie is NOT active';
}

?>