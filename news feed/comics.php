<?php

require __DIR__.'/header.php';

?>
            <li><a href="index.php">Home</a></li>
            <?php foreach ($uniqueCategories as $category) : ?>
                <?php if ($category === 'Comics') : ?> <!-- Set class="active" to this category -->
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
        <?php if ($article['category'] === 'Comics') : ?>
            <?php require __DIR__.'/article-content.php' ?>
        <?php endif; ?>
        </article>
    <?php endforeach; ?>
</main>
        
<?php

require __DIR__.'/footer.php';

?>
