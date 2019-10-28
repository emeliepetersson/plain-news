<?php
declare(strict_types=1);


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


/**
 * Get unique categories from given array and
 * return new array with these values
 *
 * @param array $articles
 * @return array
 */
function getUniqueCategories(array $articles):array {
    foreach ($articles as $article) {
        $categories[] = $article['category'];
    }
    $uniqueCategories = array_unique($categories);
    return $uniqueCategories;
}
