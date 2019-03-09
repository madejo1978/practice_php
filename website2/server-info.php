<?php 

# $_SERVER SUPERGLOBAL
    // $_SERVER is an array containing information such as headers, paths, and script locations
    // Superglobals — Superglobals are built-in variables that are always available in all scopes
    // php documentation http://php.net/manual/en/language.variables.superglobals.php   


// create server array
$server = [
    'Current Page' => $_SERVER['PHP_SELF'],             // The filename of the currently executing script, relative to the document root. 
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],       // The document root directory under which the current script is executing, as defined in the server's configuration file.
    'Host Server Name' => $_SERVER['SERVER_NAME'],      // The name of the server host under which the current script is executing. 
    'Host Header' => $_SERVER['HTTP_HOST'],             // Contents of the Host: header from the current request, if there is one.
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],   // Server identification string, given in the headers when responding to requests.
    'Script Name' => $_SERVER['SCRIPT_NAME'],           // Contains the current script's path. This is useful for pages which need to point to themselves.
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']      // The absolute pathname of the currently executing script.
];        
/* 
echo $server ['Host Server Name'] . '<br>';
echo $server ['Host Header'] . '<br>';
echo $server ['Server Software'] . '<br>';
echo $server ['Document Root'] . '<br>';
echo $server ['Current Page'] . '<br>';
echo $server ['Script Name'] . '<br>';
echo $server ['Absolute Path'] . '<br>';
 */
// create client array
$client = [
    
    'Client IP' => $_SERVER['REMOTE_ADDR'],             // doesn't work because client is the same as the server, but normally it gives an ID
    'Remote Port' => $_SERVER['REMOTE_PORT'],           // The port being used on the user's machine to communicate with the web server.
    'Client System info' => $_SERVER['HTTP_USER_AGENT']
];

/* echo $client ['Client System info'] . '<br>';
echo $client ['Client IP'] . '<br>';
echo $client ['Remote Port'] . '<br>';
 */
?>