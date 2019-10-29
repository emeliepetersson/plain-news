<?php 

declare(strict_types=1);



$database = 'sqlite:'.__DIR__ .'/plain_news.sqlite3';

$pdo = new PDO("$database"); 
//Creates a PDO instance representing a connection to a database



$sqlArticles= $pdo->query('SELECT * FROM articles'); 
// In query() you can decide what to fetch from the database

$articles = $sqlArticles->fetchAll(PDO::FETCH_ASSOC); 
// fetchAll() returns an array that consists of all the rows returned by the query. 
// This function should not be used, if many rows has been selected. In such a case conventional while loop ave to be used, fetching rows one by one instead of getting them all into array at once. 
// "Many" means more than it is suitable to be shown on the average web page.
// FETCH_ASSOC returns associative array 

$sqlAuthors = $pdo->query('SELECT * FROM authors'); 
$authors = $sqlAuthors->fetchAll(PDO::FETCH_ASSOC); 

echo "<pre>";
print_r($articles);
echo"</pre>";
