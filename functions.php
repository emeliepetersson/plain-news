<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

//https://stackoverflow.com/questions/2910611/php-sort-a-multidimensional-array-by-element-containing-date
function dateCompare($a, $b) {
    $t1 = strtotime($a['published_date']);
    $t2 = strtotime($b['published_date']);
    return $t2 - $t1;
}    



//get author name

function getAuthorName($authorId, $authors) {
    
     foreach ($authors as $author) { 
         
     
             if ($authorId === $author['id']) {
          
                $fullName = $author['first_name']. " " . $author['last_name'];

            }
    }
    
    return $fullName;
}
    
