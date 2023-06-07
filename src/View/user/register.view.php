<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <title>Digital Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full overflow-hidden">
<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                             alt="Your Company">
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="./login"
                           class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Log
                            in</a>
                    </div>
                </div>
            </div>
    </nav>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="mx-auto h-10 w-auto"
                             src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register
                            a student account</h2>
                    </div>

                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form class="space-y-6" action="./register" method="POST">
                            <div>
                                <label for="full-name" class="block text-sm font-medium leading-6 text-gray-900">Full
                                    name</label>
                                <div class="mt-2">
                                    <input id="full-name" name="full-name" type="text" autocomplete="name" required
                                           class="block w-full rounded-md border-0 py-1.5 font-semibold p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["full_name"])) : ?>
                                    <p class="mt-2 text-sm text-red-600"
                                       id="username-error"><?= $errors["full_name"] ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <label for="user-name" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                <div class="mt-2">
                                    <input id="user-name" name="user-name" type="text" autocomplete="username" required
                                           class="block w-full p-2 rounded-md border-0 font-semibold py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["username"])) : ?>
                                    <p class="mt-2 text-sm text-red-600"
                                       id="username-error"><?= $errors["username"] ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                           class="block w-full p-2 rounded-md font-semibold border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["email"])) : ?>
                                    <p class="mt-2 text-sm text-red-600" id="email-error"><?= $errors["email"] ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <label for="password"
                                       class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                <div class="mt-2">
                                    <input id="password" name="password" type="password" autocomplete="new-password"
                                           required
                                           class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["password"])) : ?>
                                    <p class="mt-2 text-sm text-red-600"
                                       id="password-error"><?= $errors["password"] ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <label for="confirm_password" class="block text-sm font-medium leading-6 text-gray-900">Confirm
                                    password</label>
                                <div class="mt-2">
                                    <input id="confirm_password" name="confirm_password" type="password"
                                           autocomplete="new-password" required
                                           class="block w-full p-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["confirm_password"])) : ?>
                                    <p class="mt-2 text-sm text-red-600"
                                       id="confirm-password-error"><?= $errors["confirm_password"] ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <button type="submit"
                                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </header>
</div>
</body>
</html>

