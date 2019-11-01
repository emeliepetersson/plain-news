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
    $dateOne = strtotime($a['published_date']);
    $dateTwo = strtotime($b['published_date']);
    return $dateTwo - $dateOne;
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


/**
 * Callback function to array_walk_recursive(), change the 
 * $item of $key containing 'id', 'author_id' and 'like_counter' into integer. 
 *
 * @param string $item
 * @param string $key
 * @return void
 */
function convertStrToInt(string &$item, string $key)
{
    if($key == 'id' && 'author_id' && 'like_counter')
        $item = (int)$item;
}
