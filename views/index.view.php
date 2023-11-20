<?php require("partials/head.php") ?>

<?php require("partials/nav.php") ?>

<?php require("partials/banner.php") ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 shadow">
            <form method="post" action="/visitors">
                <label for="inputName">Name:</label>
                <input type="text" id="inputName" name="name" required>

                <label for="inputText">Wpis:</label>
                <input type="text" id = "inputText" name="entry" required>

                <button type="submit" class="ml-5 underline">Dodaj wpis</button>
            </form>
        </div>
    </main>

<?php require("partials/footer.php") ?>