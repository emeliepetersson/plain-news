<?php

require __DIR__.'/header.php';

?>
    <nav class="desktop">
        <ul>
            <li><a href="index.php"  class="active">Home</a></li>
            <?php foreach ($uniqueCategories as $category) : ?>
                <li><a href="<?= $category; ?>.php"><?= $category; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header> <!-- End main header -->

<main class="main-grid-index">
<?php foreach ($articles as $article) : ?>
    <article>
    <header class="article-header">
        <h1><?= $article['title'] ?></h1>
        <div>
            <div><?= getName($article['author_id'], $authors). " " . $article['published_date'] . " " ?></div> 
            <div><img src="images/like.png" alt="thumbs up like icon" class="like"> <?= $article['like_counter'] ?></div>
            <div><a href="<?= $article['category'] ?>.php"><?= $article['category'] ?></a></div>
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
