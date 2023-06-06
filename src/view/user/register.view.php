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
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                            class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
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
                        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register a student account</h2>
                    </div>

                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form class="space-y-6" action="./register" method="POST">
                            <div>
                                <label for="full-name" class="block text-sm font-medium leading-6 text-gray-900">Full name</label>
                                <div class="mt-2">
                                    <input id="full-name" name="full-name" type="text" autocomplete="name" required
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["full_name"])) : ?>
                                    <p class="mt-2 text-sm text-red-600" id="username-error"><?= $errors["full_name"] ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <label for="user-name" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                <div class="mt-2">
                                    <input id="user-name" name="user-name" type="text" autocomplete="username" required
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["username"])) : ?>
                                    <p class="mt-2 text-sm text-red-600" id="username-error"><?= $errors["username"] ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["email"])) : ?>
                                    <p class="mt-2 text-sm text-red-600" id="email-error"><?= $errors["email"] ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                <div class="mt-2">
                                    <input id="password" name="password" type="password" autocomplete="new-password" required
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["password"])) : ?>
                                    <p class="mt-2 text-sm text-red-600" id="password-error"><?= $errors["password"] ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <label for="confirm_password" class="block text-sm font-medium leading-6 text-gray-900">Confirm password</label>
                                <div class="mt-2">
                                    <input id="confirm_password" name="confirm_password" type="password" autocomplete="new-password" required
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                <?php if (isset($errors["confirm_password"])) : ?>
                                    <p class="mt-2 text-sm text-red-600" id="confirm-password-error"><?= $errors["confirm_password"] ?></p>
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



                <footer class="bg-white dark:bg-gray-900 mt-24">
                    <div class="mx-auto w-full max-w-screen-xl">
                        <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="#" class=" hover:underline">About</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Careers</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Brand Center</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Blog</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Discord Server</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Twitter</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Facebook</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Privacy Policy</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Licensing</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
                                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">iOS</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Android</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Windows</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">MacOS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
    </header>
</div>
</body>
</html>

