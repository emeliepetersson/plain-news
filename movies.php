<?php

require __DIR__.'/header.php';

?>

<nav class="desktop">
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php foreach ($uniqueCategories as $category) : ?>
                <?php if ($category === 'Movies') : ?>
                    <li><a href="<?= $category; ?>.php" class="active"><?= $category; ?></a></li>
                <?php else : ?>
                    <li><a href="<?= $category; ?>.php"><?= $category; ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>
</header><!-- End main header -->

<main class="categories">
<?php foreach ($articles as $article) : ?>
    <article>
    <?php if ($article['category'] === 'Movies') : ?>
        <header class="article-header">
            <h1><?= $article['title'] ?></h1>
            <div>
                <div>
                    <?= getName($article['author_id'], $authors). " " . $article['published_date'] . " " ?>
                </div> 
                <div>
                    <img class="like-icon" src="images/like.png" alt="thumbs up like icon"  width="20px"> 
                    <input type="text" readonly="readonly" class="likes" value="<?= $article['like_counter'] ?>">
                </div> 
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
