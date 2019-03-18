<?php 
$loggedIn = true;
$array= [1,2,3,4,5];
 
// ? is called a ternary
// syntax

if($loggedIn){
    echo 'You are logged in';
} else {
    echo 'You are not logged in';
}

echo '<br>';

//  shorthand syntax
    // with a ternary-operator (?)
    echo($loggedIn) ? 'You are logged in' : 'You are not logged in'; 
    echo '<br>';
    
    // with assigned variables
    $isRegistred = ($loggedIn == true) ? true : false; //$loggedIn = condition
    echo $isRegistred;
    echo '<br>';

    // with a nested shorthand statement
    $age    = 20;
    $score  = 15;

    echo 'Ýoure score is '  . ($score > 10 ? ($age > 10 ? 'Average': 
    'Exceptional'):($age > 10 ? 'horrible':'Average'));
?>


<!-- Alternative Syntax
        // for conditionals,loops -->

        <!-- Normal -->        
        <div> 
            <?php if ($loggedIn){ ?>
            <h1>Welcome User</h1>
            <?php }else { ?>
            <h1>Welcome Guest</h1>
            <?php } ?>
        </div> 

        <!-- Alternative -->
        <div>
        <?php if($loggedIn): ?>
            <h1>Welcome User</h1>
        <?php else: ?> 
            <h1>Welcome Guest</h1>
        <?php endif; ?>
        </div>  

        <!-- arrays -->
        <div>
            <?php foreach($array as $value): ?> 
                <?php echo $value ?>
                
            <?php endforeach; ?>
        </div>

        <!-- loop -->
        <div>
            <?php for($i = 0;$i < 10; $i++): ?>
            <?php echo $i; ?> 
            <?php endfor; ?>
        </div>

        