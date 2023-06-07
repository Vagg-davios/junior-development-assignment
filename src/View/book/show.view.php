<?= view('/layout/header.View.php'); ?>
<pre class="text-4xl"><?= $headerText ?></pre>
<div class="flex flex-col items-center bg-white  rounded-lg shadow md:flex-row  ">
    <img class=" rounded-t-lg" width="400em" src="<?= $book["img_url"] ?>" alt="">
    <div class="flex flex-col justify-between p-4 ml-4 leading-normal">
        <p class="mb-0 font-normal text-1xl text-gray-700 dark:text-gray-400"><?= $book["author"] ?></p>
        <h5 class="mb-1 text-4xl font-bold tracking-tight  "><?= $book["title"] ?></h5>
        <p class="mb-40 font-normal text-base text-gray-700 dark:text-gray-400"><?= $book["isbn"] ?></p>
        <form method="POST">
            <!-- In case there's a need for a DELETE, PATCH, PUT etc. (sm other than POST + GET)  -->
            <input type="hidden" name="_method" value="POST"> <!-- No need to set it here since we want POST. Just for demonstration purposes-->
            <button type="button" class="text-white  mr-40 bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2">
                <svg fill="none" class="w-6 h-6 mr-2 -ml-1" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"></path>
                </svg>
                Borrow now
            </button>
        </form>
    </div>
</div>
<?= view('/layout/footer.View.php'); ?>

