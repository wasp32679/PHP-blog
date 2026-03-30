<?php require_once ROOT . "/src/app/views/shared/header.php"; ?>
<?php require_once ROOT . "/src/app/views/shared/navbar.php"; ?>

<div class="min-h-screen flex items-start md:items-center justify-center md:p-8">
    <div class="w-full md:max-w-6xl md:bg-gray-900 md:rounded-2xl md:border md:border-gray-700 md:shadow-lg">
        <form>
            <div class="space-y-12 p-5 m-4">
                <div class="border-b border-gray-900/10 dark:border-gray-700 pb-12">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Post</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-full">
                            <label for="title" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Title</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-gray-50 dark:bg-gray-900 pl-3 outline-1 -outline-offset-1 outline-gray-300 dark:outline-gray-600 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 dark:text-white bg-transparent placeholder:text-gray-400 dark:placeholder-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter post title...">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="content" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Content</label>
                            <div class="mt-2">
                                <textarea name="content" id="content" rows="12" class="block w-full rounded-md bg-gray-50 border border-gray-300 text-gray-900 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white px-3 py-1.5 text-base  focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Write your post content here..."></textarea>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="attachment" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Attachment</label>
                            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 dark:border-gray-600 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto size-12 text-gray-300 dark:text-gray-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="mt-4 flex text-sm/6 text-gray-600 dark:text-gray-400">
                                        <label for="file-upload" class="relative cursor-pointer rounded-md  font-semibold text-indigo-600 dark:text-indigo-400 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs/5 text-gray-600 dark:text-gray-400">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 mx-4 flex items-center justify-end gap-x-6 p-5">
                    <button type="button" class="w-24 text-sm/6 font-semibold text-gray-900 dark:text-white">Cancel</button>
                    <button type="submit" class="w-24 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once ROOT . "/src/app/views/shared/footer.php"; ?>