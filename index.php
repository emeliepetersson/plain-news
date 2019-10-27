<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/header.php';

?>

<?php foreach ($articles as $article) : ?>
    <article>
    <header class="article-header">
        <h1><?= $article['title'] ?></h1>
        <div>
            <div><?= getName($article['author_id'], $authors). " " . $article['published_date'] . " " ?></div> <div><img src="images/like.png" alt="thumbs up like icon"> <?= $article['like_counter'] ?></div> 
        </div>
    </header>
    <p class="article-content">
        <?= $article['content']; ?>
    </p>
    <a href="#" class="content-show">See more.</a>
	<a href="#" class="content-hide">Hide content.</a>
    </div>
    </div>
    <img src="<?= $article['image'] ?>" alt="<?= $article['alt_text'] ?>" loading="lazy" width="100%">
    </article>
<?php endforeach; ?>
        
<?php

require __DIR__.'/footer.php';

?>
