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
