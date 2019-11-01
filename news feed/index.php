<?php

require __DIR__.'/header.php';

?>
            <li><a href="index.php" class="active">Home</a></li>
            <?php foreach ($uniqueCategories as $category) : ?>
                <li><a href="<?= $category; ?>.php"><?= $category; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header> <!-- End main header -->

<main class="main-grid-index">
    <?php foreach ($articles as $article) : ?>
        <article>
            <?php require __DIR__.'/article-content.php' ?>
        </article>
    <?php endforeach; ?>
</main>
        
<?php

require __DIR__.'/footer.php';

?>
