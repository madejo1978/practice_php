<?php

// change cookie for a day
setcookie('username', "Activate Cookie without using a 'Form'", time() + (86400 * 30) );

// delete cookie
setcookie('username', "Activate Cookie without using a 'Form'", time() - 3600);

if(isset($_COOKIE['username'])){
    echo 'Welcome ' . $_COOKIE['username'] . ' your cookie is active' . '<br>';
} else {
    echo 'The cooke is NOT active';
}

?>