<?php require("partials/head.php") ?>

<?php require("partials/nav.php") ?>

<?php require("partials/banner.php") ?>

    <main>

        <?php $posts = getInputs(); ?>
        <?php foreach ($posts as $post) : ?>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 shadow">
                <p class="text-lg"><?= $post['name'] ?></p>
                <p class="text-sm"><?= $post['post'] ?></p>
        </div>
         <?php endforeach; ?>


    </main>

<?php require("partials/footer.php") ?>