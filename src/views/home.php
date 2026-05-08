<?php require_once ROOT . "/src/views/shared/header.php"; ?>
<?php require_once ROOT . "/src/views/shared/navbar.php"; ?>

<?php
/** @var \Ryan\PhpBlog\models\Post[] $posts */
?>

<div class="flex flex-col py-40 items-center text-white">
    <h1 class="mb-4  text-4xl font-bold tracking-tight text-heading md:text-5xl lg:text-6xl">Welcome to Inkflow</h1>
    <p class="max-w-5xl text-center mb-6 text-lg font-normal text-body lg:text-xl sm:px-16 xl:px-48">
        Put your words out there.
        Inkflow is where you write freely, publish instantly, and build an audience around the things you care about.
        Your first post is one click away.
    </p>
    <a href="/posts/create" class="rounded-md bg-indigo-600 px-5 py-3 text-lg font-bold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Create your own post
    </a>
</div>

<div class="bg-gray-900">
    <div class="max-w-screen-4xl rounded-xl text-white lg:py-32 grid grid-cols-16 my-20 py-16 mx-auto">
        <ul class="lg:gap-8 sm:gap-8 grid grid-cols-16 col-span-10 col-start-4 gap-6">

            <?php foreach ($posts as $post): ?>
                <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4 border-3 border-gray-800 rounded-xl">
                    <a href="#">
                        <img src="<?= htmlspecialchars($post->image) ?>" class="w-full h-80 object-cover mb-4 rounded-lg shadow-none transition-shadow  duration-500 ease-in-out group-hover:shadow-lg" alt="post image">
                        <div class="flex items-center mb-3 px-2">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 font-display mr-2 capitalize bg-indigo-600">
                                News
                            </span>
                            <p class="font-mono text-xs font-normal opacity-75">
                                <?= htmlspecialchars(date('d/m/Y', strtotime($post->created_at))) ?>
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 p-2">
                            <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                                <span class="link-underline link-underline-black">
                                    <?= htmlspecialchars($post->title) ?>
                                </span>
                            </p>
                            <p class="truncate font-display max-w-sm text-lg text-gray-400 leading-tight">
                                <span class="link-underline link-underline-black">
                                    <?= htmlspecialchars($post->content) ?>
                                </span>
                            </p>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</div>

<?php require_once ROOT . "/src/views/shared/footer.php"; ?>