<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

usort($articles, 'dateCompare');

//echo "<pre>";
//die(var_dump(getAuthorName($authors, $articles)));
//echo "</pre>";

//print_r(getAuthorName($authors, $articles));



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
    </head>
    <body>
        <h1>News feed</h1>

        <!-- Detta ska bli en for loop som skapar en artikel per $articles arrayn, plus $articles['author']===$authors['fullname'] ska skriva ut full name och ID-->
        <?php foreach ($articles as $article) : ?>
           
            <article>

            <h1><?= $article['title'] ?></h1>
            <p><?= $article['content'] ?></p>
            <footer>
            Author| <?= $article['published_date'] ?> | <img src="like.png" alt="thumbs up like icon"> <?= $article['like_counter'] ?> 
            </footer>
            </article>
        
        <?php endforeach; ?>

    </body>
</html>
