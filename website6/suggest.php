<?php

$people[] = "Erik";
    $people[] = "Philip";
    $people[] = "Rick";
    $people[] = "Daisy";
    $people[] = "Esmeralda";
    $people[] = "Erwin";
    $people[] = "Willem";
    $people[] = "Jelle";
    $people[] = "Rivellino";
    $people[] = "Martin";
    $people[] = "Koen";
    $people[] = "Bob";
    $people[] = "Ferran";
    $people[] = "Thomas";

// get data from the search-bar    
    // with request, because then you can use both GET and POST to get the data 
$inputSearch = $_REQUEST['q'];

$suggestion = "";

// get suggestions 
if($inputSearch !== ""){
 $inputSearch = strtolower($inputSearch);
 $length = strlen($inputSearch);
 foreach($people as $person){
  
  // stristr() searches for the first occurrence of a string inside another string.
  // substr() returns a part of a string.
    if(stristr($inputSearch, substr($person, 0, $length))){
        if($suggestion === ""){
            $suggestion = $person;
        } else {
            // appending: if you find more persons with the same input (name, letters etc.)
            $suggestion .= ", $person";
        }
    }
 }
}
echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>
</body>
</html>
