<?php view('/layout/header.View.php'); ?>
<pre class="text-4xl"><?= $headerText ?></pre>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <?php foreach ($books as $book) : ?>
                <div class="border-dashed border-2 rounded-lg p-4">
                    <img class="h-64 max-w-full rounded-lg "
                         src=<?= empty($book["img_url"]) ? "https://islandpress.org/sites/default/files/default_book_cover_2015.jpg" : $book["img_url"] ?>  alt="">
                    <pre><?= $book["title"] ?></pre>
                    <pre class="text-base"><?= $book["author"] ?></pre>
                    <a href="/junior-development-assignment/public/book?id=<?= $book["book_id"] ?>"
                       class="inline-flex px-4 py-2 w-64 text-base font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <pre class="">Borrow</pre>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php view('/layout/footer.View.php'); ?>

