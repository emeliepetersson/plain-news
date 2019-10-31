<?php

require __DIR__.'/db_data.php';
require __DIR__.'/functions.php';

//Usort will invoke the function dateCompare again and again, each time comparing two elements from the 
//§articles array until every given key has been compared. The usort function will sort the array by the returned integers.
usort($articles, 'dateCompare');


$uniqueCategories = getUniqueCategories($articles);

//Apply the callback function convertStrToInt to each element of the array.
array_walk_recursive($authors, 'convertStrToInt');
array_walk_recursive($articles, 'convertStrToInt');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Marvel news</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Chilanka|Gayathri:100|Karla|Raleway|Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chilanka|Gayathri:100|Karla|Raleway|Roboto+Condensed&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="main-header">
            <nav class="mobile">
                <img src="images/hamburger-icon.png" alt="hamburger navigation menu icon" loading="lazy" class="hamburger-icon"></<img>
                <div class="mobile-nav-items">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <?php foreach ($uniqueCategories as $category) : ?>
                            <li><a href="<?= $category; ?>.php"><?= $category; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
            <div>
                <img src="images/MARVEL.png" alt="Marvel icon" class="marvel-icon">
                <h1>News feed</h1>
            </div>
            <nav class="desktop">
                <ul>
                <li><a href="index.php">Home</a></li>
