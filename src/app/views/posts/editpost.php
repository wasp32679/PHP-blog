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
                            <label for="username" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Title</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-gray-50 dark:bg-gray-900 pl-3 outline-1 -outline-offset-1 outline-gray-300 dark:outline-gray-600 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="text" name="username" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 dark:text-white bg-transparent placeholder:text-gray-400 dark:placeholder-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter post title...">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="about" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Content</label>
                            <div class="mt-2">
                                <textarea name="about" id="about" rows="12" class="block w-full rounded-md bg-gray-50 border border-gray-300 text-gray-900 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white px-3 py-1.5 text-base  focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Write your post content here..."></textarea>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Attachment</label>
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
                    <button type="button" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600  focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600">
                        <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        Delete
                    </button>
                    <button type="submit" class="w-24 rounded-md bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<?php require_once ROOT . "/src/app/views/shared/footer.php"; ?>