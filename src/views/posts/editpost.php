<?php require_once ROOT . "/src/views/shared/header.php"; ?>
<?php require_once ROOT . "/src/views/shared/navbar.php"; ?>

<?php
/** @var \Ryan\PhpBlog\models\Post $post */
?>

<main class="py-15 max-w-4xl mx-auto px-4 flex-1 w-full">
    <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm dark:bg-gray-900 dark:border-gray-700">

        <?php if (!empty($message)): ?>
            <?php if ($message === "Post successfully updated!"): ?>
                <div class="mb-6 p-4 flex items-center gap-3 rounded-lg border border-green-500/30 bg-green-500/10 px-9 py-3 text-xl text-green-400">
                    <?= htmlspecialchars($message) ?>
                </div>
            <?php else: ?>
                <div class="mb-6 p-4 flex items-center gap-3 rounded-lg border border-red-500/30 bg-red-500/10 px-9 py-3 text-xl text-red-400">
                    <?= htmlspecialchars($message) ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <h1 class="text-3xl font-bold mb-8 text-gray-900 dark:text-white">Edit Post</h1>

        <form action="/posts/edit/<?= $post->id ?>" method="POST" enctype="multipart/form-data" class="space-y-6">

            <div>
                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-gray-300">Post Title</label>
                <input type="text" name="title" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-indigo-50/50 focus:border-indigo-500 outline-none  dark:border-gray-600 dark:text-white dark:focus:ring-indigo-500/30 dark:focus:border-indigo-500"
                    value="<?= htmlspecialchars($post->title) ?>">
            </div>

            <div>
                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-gray-300">Content</label>
                <textarea name="content" rows="10" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-indigo-50/50 focus:border-indigo-500 outline-none dark:border-gray-600 dark:text-white dark:focus:ring-indigo-500/30 dark:focus:border-indigo-500 wrap-break-word"><?= htmlspecialchars($post->content) ?></textarea>
            </div>

            <div>
                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-gray-300">Current Image</label>
                <div class="mb-4 rounded-xl overflow-hidden border border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                    <img src="<?= htmlspecialchars($post->image) ?>" class="w-full h-auto max-h-96 object-contain" alt="Current featured image">
                </div>
                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-gray-300 ">Replace Image</label>
                <input type="file" name="image" class="block w-full text-sm text-gray-500 dark:text-gray-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 dark:file:bg-indigo-900/30 dark:file:text-indigo-400 dark:hover:file:bg-indigo-900/50 transition-all cursor-pointer">
            </div>

            <div class="flex gap-4">
                <a href="allPosts.php" class="w-1/3 text-center bg-gray-50 text-gray-500 font-bold py-4 rounded-xl hover:bg-gray-100 transition-all dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                    Cancel
                </a>
                <button type="submit" class="w-2/3 bg-indigo-600 text-white font-bold py-4 rounded-xl hover:bg-indigo-700 shadow-lg shadow-indigo-200 transition-all dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:shadow-indigo-900/30">
                    Update Post
                </button>
            </div>
        </form>
    </div>
</main>

<?php require_once ROOT . "/src/views/shared/footer.php"; ?>