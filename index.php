<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/header.php';

?>
    <nav class="desktop">
        <ul>
            <li><a href="index.php"  class="active">Home</a></li>
            <?php foreach ($uniqueValues as $value) : ?>
                <li><a href="<?= $value; ?>.php"><?= $value; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main class="main-grid-index">
<?php foreach ($articles as $article) : ?>
    <article>
    <header class="article-header">
        <h1><?= $article['title'] ?></h1>
        <div>
            <div><?= getName($article['author_id'], $authors). " " . $article['published_date'] . " " ?></div> <div><img src="images/like.png" alt="thumbs up like icon" class="like"> <?= $article['like_counter'] ?></div> 
        </div>
    </header>
    <p class="article-content">
        <?= $article['content']; ?>
    </p>
    <button class="show-hide">Show more</button>
    </div>
    </div>
    <figure>
    <img src="<?= $article['image'] ?>" alt="<?= $article['alt_text'] ?>" loading="lazy">
    </figure>
    </article>
<?php endforeach; ?>
</main>
        
<?php

require __DIR__.'/footer.php';

?>
