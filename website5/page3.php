<?php
$user = ['name' => 'Ramona', 'email' => 'ramona@test.com', 'age' => 41];

// cookie expects a string, prevent this with the function serialize()
$user = serialize($user);
setcookie('user', $user, time() + (86400 * 30));

$user = unserialize($_COOKIE['user']);
echo $user['email'] . '<br>';
print_r($user);


?>