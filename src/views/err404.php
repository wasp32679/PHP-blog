<?php
http_response_code(404);
require_once ROOT . "/src/views/shared/header.php";
?>

<div class="flex flex-col min-h-screen justify-center items-center">
    <h1 class="text-[120px] font-extrabold text-gray-900 dark:text-white">404</h1>
    <p class="text-2xl font-medium text-gray-600 dark:text-gray-300 mb-6">Page Not Found</p>
    <a href="/"
        class="px-4 py-2 font-medium text-white bg-indigo-500 rounded-md hover:bg-indigo-600 transition-all duration-200 ease-in-out">
        Go Home
    </a>
</div>