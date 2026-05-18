<?php require_once ROOT . "/src/views/shared/header.php"; ?>
<?php require_once ROOT . "/src/views/shared/navbar.php"; ?>

<?php
/** @var \Ryan\PhpBlog\models\Post $post */
?>

<!--Title-->
<div class="text-center pt-16 md:pt-32">
    <div class="absolute top-22 right-9">
        <a href="/posts/edit/<?= $post->id ?>" class="px-6.75 py-2 bg-indigo-600 hover:bg-indigo-500 text-white font-bold rounded-lg transition-colors">
            Edit
        </a>
    </div>
    <p class="text-sm md:text-base text-indigo-500 font-bold"><?= date('d F Y', strtotime($post->created_at)) ?>
    </p>
    <h1 class="text-white font-bold break-normal text-3xl md:text-5xl"><?= htmlspecialchars($post->title, ENT_QUOTES, 'UTF-8') ?></h1>
</div>

<!--image-->
<div class="container w-full max-w-6xl mx-auto mt-8 mb-16 rounded overflow-hidden">
    <img
        src="<?= htmlspecialchars($post->image, ENT_QUOTES, 'UTF-8') ?>"
        alt="<?= htmlspecialchars($post->title, ENT_QUOTES, 'UTF-8') ?>"
        class="w-full max-h-[75vh] object-contain"
        style="background-color:#111;" />
</div>

<!--Container-->
<div class="container max-w-5xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

        <!--Content-->
        <div class=" w-full p-8 md:p-24 text-xl md:text-2xl text-white leading-normal" style="font-family:Georgia,serif;">
            <p class="wrap-break-word whitespace-pre-line"><?= htmlspecialchars($post->content, ENT_QUOTES, 'UTF-8') ?></p>
        </div>

        <!--Author-->
        <div class="flex w-full text-white items-center font-sans p-8 md:p-24">
            <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
            <div class="flex-1">
                <p class="text-base font-bold md:text-xl leading-none">Ghostwind CSS</p>
            </div>
            <div class="justify-end">

            </div>
            <!--/Author-->

        </div>


    </div>

</div>



<?php require_once ROOT . "/src/views/shared/footer.php"; ?>