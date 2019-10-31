<?php

require __DIR__.'/header.php';

?>

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
        <?php require __DIR__.'/article-content.php' ?>
    <?php endif; ?>
    </article>
<?php endforeach; ?>
</main>
        
<?php

require __DIR__.'/footer.php';

?>
