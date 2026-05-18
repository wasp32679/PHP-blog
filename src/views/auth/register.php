<?php require_once ROOT . "/src/views/shared/header.php"; ?>

<?php
/** @var array $errors
 *  @var string $name
 *  @var string $email
 */
?>

<section class="bg-gray-50 dark:bg-gray-800 min-h-screen flex items-center justify-center px-6">
    <div class="w-full max-w-2xl bg-white dark:bg-gray-900 rounded-2xl shadow dark:border dark:border-gray-700 p-8">

        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Create an account</h1>

        <?php if (!empty($errors['general'])): ?>
            <div class="flex items-center gap-3 rounded-lg border border-red-500/30 bg-red-500/10 p-3 text-xl text-red-400">
                <?= htmlspecialchars($errors['general']) ?>
            </div>
        <?php endif; ?>

        <form class="space-y-8" method="POST" action="/register">

            <?php foreach (
                [
                    ['name', 'name', 'Username', $name],
                    ['email', 'email', 'Email address', $email],
                    ['password', 'password', 'Password', ''],
                    ['password', 'confirm-password', 'Confirm password', ''],
                ] as [$type, $id, $label, $value]
            ): ?>
                <div class="relative">
                    <input type="<?= $type ?>" name="<?= $id ?>" id="<?= $id ?>" placeholder=" " value="<?= $value ?>"
                        class="peer block w-full py-4 px-0 bg-transparent border-0 border-b-2 <?= !empty($errors[$id]) ? 'border-red-500' : 'border-gray-300 dark:border-gray-600' ?> text-base text-gray-900 dark:text-white focus:outline-none focus:ring-0 focus:border-indigo-600 dark:focus:border-indigo-500" />
                    <label for="<?= $id ?>"
                        class="absolute top-4 left-0 text-base text-gray-500 dark:text-gray-400 origin-left transition-all duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 -translate-y-7 scale-75 peer-focus:-translate-y-7 peer-focus:scale-75 peer-focus:text-indigo-600 dark:peer-focus:text-indigo-500">
                        <?= $label ?>
                    </label>
                    <?php if (!empty($errors[$id])): ?>
                        <p class="mt-1 text-sm text-red-400"><?= htmlspecialchars($errors[$id]) ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>

            <button type="submit"
                class="w-full py-3.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-base rounded-lg focus:ring-4 focus:ring-indigo-300 dark:focus:ring-indigo-800">
                Create an account
            </button>

            <p class="text-center text-sm text-gray-500 dark:text-gray-400">
                Already have an account? <a href="#" class="font-medium text-indigo-600 hover:underline dark:text-indigo-500">Login here</a>
            </p>

        </form>
    </div>
</section>