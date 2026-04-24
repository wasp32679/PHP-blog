<?php require_once ROOT . "/src/views/shared/header.php"; ?>

<section class="bg-gray-50 dark:bg-gray-800 ">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 ">

        <div class="w-full  bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-2xl xl:p-0 dark:bg-gray-900 dark:border-gray-700">
            <div class="p-6 space-y-6 md:space-y-6 sm:p-8">
                <h1 class="text-xl pb-10 font-bold leading-tight tracking-tight text-gray-900 md:text-3xl dark:text-white">
                    Create an account
                </h1>
                <form class="space-y-4 md:space-y-6 " action="#">
                    <div class="relative z-0 w-full mb-12 group">
                        <input type="email" name="floating_email" id="floating_email" class="block py-4 px-0 w-full text-base text-gray-900 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-indigo-600 dark:focus:border-indigo-500 peer" placeholder=" " required />
                        <label for="floating_email" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-7 scale-75 top-4 -z-10 origin-left peer-focus:inset-0 peer-focus:text-indigo-600 dark:peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email address</label>
                    </div>

                    <div class="relative z-0 w-full mb-12 group">
                        <input type="password" name="password" id="password" class="block py-4 px-0 w-full text-base text-gray-900 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-indigo-600 dark:focus:border-indigo-500 peer" placeholder=" " required />
                        <label for="password" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-7 scale-75 top-4 -z-10 origin-left peer-focus:inset-0 peer-focus:text-indigo-600 dark:peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Password</label>
                    </div>

                    <div class="relative z-0 w-full mb-12 group">
                        <input type="password" name="confirm-password" id="confirm-password" class="block py-4 px-0 w-full text-base text-gray-900 dark:text-white bg-transparent border-0 border-b-2 border-gray-300 dark:border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-indigo-600 dark:focus:border-indigo-500 peer" placeholder=" " required />
                        <label for="confirm-password" class="absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-7 scale-75 top-4 -z-10 origin-left peer-focus:inset-0 peer-focus:text-indigo-600 dark:peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Confirm password</label>
                    </div>

                    <div class="flex gap-3">
                        <div class="flex h-6 shrink-0 items-center">
                            <div class="group grid size-4 grid-cols-1">
                                <input id="terms" name="terms" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                                    <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>
                        <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-indigo-600 hover:underline dark:text-indigo-500" href="#">Terms and Conditions</a></label>
                    </div>

                    <button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-base px-5 py-3.5 mt-5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Create an account</button>

                    <p class="text-base text-center font-light  text-gray-500 dark:text-gray-400 ">
                        Already have an account? <a href="#" class="font-medium text-indigo-600 hover:underline dark:text-indigo-500">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>