<?php
include 'server-info.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>CLIENT & SERVER info</title>
</head>
<body>
<!-- 
    Output the server-info.php on the index.php
        - if there is a variable server, create a wrapper with a bootstrap-class 
        - loop through array $server  
        - create a list with a class for each value 
        - output the key and the value; 
-->

    <div class = "container">
        <h1>Server-information</h1>
            <?php if($server){ ?>
                    <ul class = "list-group">
                        <?php foreach($server as $serverInfo => $serverValue){ ?> 
                            <li class = "list-group-item">                    
                            <strong><?php echo $serverInfo; ?>:</strong> 
                                    <?php echo $serverValue; ?>     
                            </li>
                    </ul>     
                        <?php }           
                    } else {
                        echo '<h1>No Server-information available at the moment<h1>';
                      } ?>     

    <div class = "container">
        <br>
    </div>

<!-- 
    Better way of writing within a HTML markup:
        - the alternate syntax is to change the opening brace { to a colon (:)
        - and the closing brace to endif;, endwhile;, endfor;, endforeach;, or endswitch;, respectively.
        - http://php.net/manual/en/control-structures.alternative-syntax.php
        - ! much better, much more overview!
 -->

 <h1>Client-information</h1>
            <?php if($client): ?>
                <ul class = "list-group">
                    <?php foreach($client as $clientInfo => $clientValue): ?> 
                        <li class = "list-group-item">                    
                        <strong><?php echo $clientInfo; ?>:</strong> 
                                <?php echo $clientValue; ?>     
                        </li>
                    <?php endforeach; ?>
                </ul>         
            <?php else: 
                echo '<h1>No Client-information available at the moment<h1>';    
            endif; ?>    <!-- in this syntax the endif closes after the else-statement -->                
    </div>    
</body>
</html>


