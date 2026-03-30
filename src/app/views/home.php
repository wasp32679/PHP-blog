<?php require_once ROOT . "/src/app/views/shared/header.php"; ?>
<?php require_once ROOT . "/src/app/views/shared/navbar.php"; ?>

<!--Hero-->
<div class="flex flex-col py-40 items-center text-white">
    <h1 class="mb-4  text-4xl font-bold tracking-tight text-heading md:text-5xl lg:text-6xl">Welcome to Inkflow</h1>
    <p class="max-w-5xl text-center mb-6 text-lg font-normal text-body lg:text-xl sm:px-16 xl:px-48">
        Put your words out there.
        Inkflow is where you write freely, publish instantly, and build an audience around the things you care about.
        Your first post is one click away.
    </p>
    <button type="submit" class=" rounded-md bg-indigo-600 px-5 py-3 text-lg font-bold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Create your own post
    </button>
</div>

<!--Posts-->
<div class="bg-gray-900">
    <div class="max-w-screen-2xl rounded-xl text-white lg:py-32 grid grid-cols-12 my-20 py-16 mx-auto">
        <ul class="lg:gap-16 sm:gap-8 grid grid-cols-12 col-span-10 col-start-2 gap-6">

            <li class="mb-6 md:md-0 col-span-12 sm:col-span-6  lg:col-span-4">
                <a href="#">
                    <img src="/mermaid-diagram-2026-03-30-083353.png" class="w-full h-80 object-cover mb-4 rounded-lg shadow-none transition-shadow  duration-500 ease-in-out group-hover:shadow-lg" alt="mermaid">
                    <div class="flex items-center mb-3">
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 font-display mr-2 capitalize bg-indigo-600">
                            News
                        </span>
                        <p class="font-mono text-xs font-normal opacity-75 ">September 28th, 2022</p>
                    </div>
                    <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                        <span class="link-underline link-underline-black ">
                            Laravel 9.32 Released
                        </span>
                    </p>
                </a>
            </li>

            <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                <a href="">
                    <img src="/navigation (1).png" class="w-full h-80 object-cover mb-4 rounded-lg shadow-none transition-shadow duration-500 ease-in-out group-hover:shadow-lg" alt="laravel-notification-event-subscriber-package2.jpg">
                    <div class="flex items-center mb-3">
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 font-display mr-2 capitalize bg-indigo-600">
                            Packages
                        </span>
                        <p class="font-mono text-xs font-normal opacity-75 ">September 27th, 2022</p>
                    </div>
                    <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                        <span class="link-underline link-underline-black ">
                            Laravel Notification Event Subscriber Package
                        </span>
                    </p>
                </a>
            </li>

            <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                <a href="">
                    <img src="" class="w-full h-80 object-cover mb-4 rounded-lg shadow-none transition-shadow duration-500 ease-in-out group-hover:shadow-lg" alt="otp.png">
                    <div class="flex items-center mb-3">
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 font-display mr-2 capitalize bg-indigo-600">
                            Tutorials
                        </span>
                        <p class="font-mono text-xs font-normal opacity-75 ">September 23rd, 2022</p>
                    </div>
                    <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                        <span class="link-underline link-underline-black ">
                            Simple one-time password authentication in Laravel
                        </span>
                    </p>
                </a>
            </li>

            <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                <a href="">
                    <img src="" class="w-full h-80 object-cover mb-4 rounded-lg shadow-none transition-shadow duration-500 ease-in-out group-hover:shadow-lg" alt="laravel-scout-featured.png">
                    <div class="flex items-center mb-3">
                        <p class="font-mono text-xs font-normal opacity-75 ">September 22nd, 2022</p>
                    </div>
                    <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                        <span class="link-underline link-underline-black ">
                            Meilitools offers advanced Meilisearch index features in Laravel Scout
                        </span>
                    </p>
                </a>
            </li>

            <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                <a href="#">
                    <img src="" class="w-full h-80 object-cover mb-4 rounded-lg shadow-none transition-shadow duration-500 ease-in-out group-hover:shadow-lg" alt="livewire-v3.jpg">
                    <div class="flex items-center mb-3">
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 font-display mr-2 capitalize bg-indigo-600">
                            News
                        </span>
                        <p class="font-mono text-xs font-normal opacity-75 ">September 21st, 2022</p>
                    </div>
                    <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                        <span class="link-underline link-underline-black ">
                            Upcoming Livewire v3 Features and Changes
                        </span>
                    </p>
                </a>
            </li>

            <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                <a href="#">
                    <img src="" class="w-full h-80 object-cover mb-4 rounded-lg shadow-none transition-shadow duration-500 ease-in-out group-hover:shadow-lg" alt="laravel9-1646792144.jpg">
                    <div class="flex items-center mb-3">
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 font-display mr-2 capitalize bg-indigo-600">
                            News
                        </span>
                        <p class="font-mono text-xs font-normal opacity-75 ">September 21st, 2022</p>
                    </div>
                    <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                        <span class="link-underline link-underline-black ">
                            Laravel 9.31 Released
                        </span>
                    </p>
                </a>
            </li>

        </ul>
    </div>
</div>

<?php require_once ROOT . "/src/app/views/shared/footer.php"; ?>