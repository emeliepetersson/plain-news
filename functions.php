<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.


/**
 * Return a integer less than, equal to or greater than zero, 
 * based on the diffenrence between two values of a given key in the given array.
 *
 * @param array $a
 * @param array $b
 * @return integer
 */
function dateCompare(array $a, array $b) :int {
    $timeOne = strtotime($a['published_date']);
    $timeTwo = strtotime($b['published_date']);
    return $timeTwo - $timeOne;
}    



/**
 * Return name where given id matches id in given array
 *
 * @param integer $id
 * @param array $people
 * @return string
 */
function getName(int $id, array $people) :string {
     foreach ($people as $person) { 
             if ($id === $person['id']) {
                $fullName = $person['first_name']. " " . $person['last_name'];
            }
    }
    return $fullName;
}


function getUniqueValues (array $array):array {
    foreach ($array as $row) {
        $values[] = $row['category'];
    }
    $uniqueValues = array_unique($values);
    return $uniqueValues;
}
