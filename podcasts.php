<?php

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
        <button class="show-hide">Show more</button>
        <img src="<?= $article['image'] ?>" alt="<?= $article['alt_text'] ?>" loading="lazy" width="100%">
    <?php endif; ?>
    </article>
<?php endforeach; ?>
</main>
        
<?php

require __DIR__.'/footer.php';

?>
