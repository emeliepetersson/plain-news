<?php 

declare(strict_types=1);



$database = 'sqlite:'.__DIR__ .'/database/plain_news.sqlite3';

$pdo = new PDO("$database"); //Creates a PDO instance representing a connection to a database

$sqlArticles= $pdo->query('SELECT * FROM articles'); 
$articles = $sqlArticles->fetchAll(PDO::FETCH_ASSOC); // fetch all rows returned by the query. FETCH_ASSOC returns associative array 

$sqlAuthors = $pdo->query('SELECT * FROM authors'); 
$authors = $sqlAuthors->fetchAll(PDO::FETCH_ASSOC); 
