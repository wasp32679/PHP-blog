<?php require_once ROOT . "/src/views/shared/header.php"; ?>
<?php require_once ROOT . "/src/views/shared/navbar.php"; ?>

<?php
/** @var \Ryan\PhpBlog\models\Post[] $posts */
?>

<div class="flex flex-col py-40 items-center text-gray-900 dark:text-white">
    <h1 class="mb-4  text-4xl font-bold tracking-tight text-heading md:text-5xl lg:text-6xl">Welcome to Inkflow</h1>
    <p class="max-w-5xl text-center mb-6 text-lg font-normal text-body lg:text-xl sm:px-16 xl:px-48">
        Put your words out there.
        Inkflow is where you write freely, publish instantly, and build an audience around the things you care about.
        Your first post is one click away.
    </p>
    <a href="/posts/create" class="rounded-md bg-indigo-600 px-10 py-4 text-2xl font-bold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Create your own post
    </a>
</div>

<div>
    <div class="max-w-screen-4xl mx-auto py-16 lg:py-32 px-4 sm:px-6">
        <ul class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

            <?php foreach ($posts as $post): ?>
                <li class="border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden bg-white dark:bg-gray-950 hover:border-gray-300 dark:hover:border-gray-700 transition-colors shadow-xl ring-1 ring-black/5 dark:ring-white/10">
                    <a href="/posts/<?= $post->id ?>" class="flex flex-col h-full">
                        <!-- Image with aspect ratio -->
                        <div class="aspect-video overflow-hidden bg-gray-100 dark:bg-gray-800">
                            <img
                                src="<?= htmlspecialchars($post->image) ?>"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                alt="<?= htmlspecialchars($post->title) ?>">
                        </div>

                        <!-- Card content -->
                        <div class="flex flex-col gap-3 p-4 flex-1">
                            <!-- Badge & Date -->
                            <div class="flex items-center gap-2">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-indigo-600 text-white">
                                    News
                                </span>
                                <p class="text-xs text-gray-500 dark:text-white font-mono opacity-75">
                                    <?= htmlspecialchars(date('d/m/Y', strtotime($post->created_at))) ?>
                                </p>
                            </div>

                            <!-- Title -->
                            <p class="text-xl font-bold text-gray-900 dark:text-white leading-tight line-clamp-2">
                                <?= htmlspecialchars($post->title) ?>
                            </p>

                            <!-- Preview -->
                            <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-3 flex-1">
                                <?= htmlspecialchars($post->content) ?>
                            </p>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</div>

<?php require_once ROOT . "/src/views/shared/footer.php"; ?>