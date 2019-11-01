<header class="article-header">
    <h2><?= $article['title'] ?></h2>
    <div>
        <div>
            <?= getName($article['author_id'], $authors). " " . $article['published_date'] . " " ?>
        </div> 
        <div>
            <img class="like-icon" src="images/like.png" alt="thumb up like icon"> 
            <input type="text" readonly="readonly" class="likes" value="<?= $article['like_counter'] ?>">
        </div> 
    </div>
</header>
<p class="article-content">
    <?= $article['content']; ?>
</p>
<button class="show-hide">Show more</button>
<figure>
    <img src="<?= $article['image'] ?>" alt="<?= $article['alt_text'] ?>" loading="lazy" class="article-img">
</figure>
