<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

//Usort will invoke the function dateCompare again and again, each time comparing two elements from the 
//§articles array until every given key has been compared. The usort function will sort the array by the returned integers.
usort($articles, 'dateCompare');

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
        <header>
            <nav>
                <a href=""><img src="images/hamburger-icon.png" alt="hamburger icon" loading="lazy"></a>
                <ul>
                    
                    <li><a href="#"  class="active">Home</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Podcasts</a></li>
                </ul>
            </nav>
            <div>
            <img src="images/MARVEL.png" alt="Marvel icon" class="marvel-icon">
            <h1>News feed</h1>
            </div>
        </header>


        <?php foreach ($articles as $article) : ?>
           
            <article>
            <h1><?= $article['title'] ?></h1>
            <p><?= $article['content'] ?></p>
            <img src="<?= $article['image'] ?>" alt="<?= $article['alt_text'] ?>" loading="lazy" width="100%">
            <footer>
            <div><?= getName($article['author_id'], $authors). " " . $article['published_date'] . " " ?></div> <div><img src="like.png" alt="thumbs up like icon"> <?= $article['like_counter'] ?></div> 
            </footer>
            </article>
    
        <?php endforeach; ?>
        
    </body>
</html>
