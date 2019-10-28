<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/header.php';

?>

<nav class="desktop">
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php foreach ($uniqueValues as $value) : ?>
                <?php if ($value === 'Podcasts') : ?>
                    <li><a href="<?= $value; ?>.php" class="active"><?= $value; ?></a></li>
                <?php else : ?>
                    <li><a href="<?= $value; ?>.php"><?= $value; ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main class="categories">
<?php foreach ($articles as $article) : ?>
    <article>
    <?php if ($article['category'] === 'Podcasts') : ?>
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
    <?php endif; ?>
    </article>
<?php endforeach; ?>
</main>
        
<?php

require __DIR__.'/footer.php';

?>
