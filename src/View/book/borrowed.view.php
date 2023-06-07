<?php view('/layout/header.View.php'); ?>
<pre class="text-3xl text-red"><?= $_SESSION['error'] ?? '' ?></pre>
<pre class="text-3xl text-red"><?= $_SESSION['return'] ?? '' ?></pre>
<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['return']); ?>
<pre class="text-4xl"><?= $headerText ?></pre>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Book title
            </th>
            <th scope="col" class="px-6 py-3">
                Author
            </th>
            <th scope="col" class="px-6 py-3">
                Due date
            </th>
            <th scope="col" class="px-6 py-3">
                Actions
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($loans as $loan) :?>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?= $loan['title'] ?>
            </th>
            <td class="px-6 py-4">
                <?= $loan['author']  ?>
            </td>
            <td class="px-6 py-4">
                <?= $loan['due_date']  ?>
            </td>
            <td class="px-6 py-4">
                <form method="POST" action="./return">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="loan_id" value="<?= $loan['id'] ?>">
                    <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                        Return
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= view('/layout/footer.View.php'); ?>


