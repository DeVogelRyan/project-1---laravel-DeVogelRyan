@include('layouts.head')

<body>
    @include('layouts.nav')
    <h1 class="ml-6 mt-5 text-gray-800 font-semibold text-xl">Sources:</h1>
    <div
        class="p-2 flex flex-col container w-4/5 mt-10 mx-auto w-full items-center justify-center bg-white dark:bg-gray-900 rounded-lg shadow">
        <ul class="flex flex-col divide-y w-full">
            <li class="flex flex-row">
                <div class="flex flex-1 items-center p-4">
                    <div class="flex-1 pl-1">
                        <div class="text-gray-600 dark:text-gray-200 text-xs sm:text-sm break-words">Name: Writing a
                            Blog in Laravel: Create a Post — Part 1</div>
                    </div>
                </div>
                <div class="flex flex-4 items-center p-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white text-sm fontfont-bold py-2 px-2 rounded"
                        target="_blank"
                        href="https://medium.com/@developer.naren/writing-a-blog-in-laravel-create-a-post-part-1-dc4fc03294be">Open
                        link</a>
                </div>
            </li>
            <li class="mt-2 flex flex-row">
                <div class="flex flex-1 items-center p-4">
                    <div class="flex-1 pl-1">
                        <div class="text-gray-600 dark:text-gray-200 text-xs sm:text-sm break-words">Name: Writing a
                            Blog in Laravel: Create a Post — Part 2</div>
                    </div>
                </div>
                <div class="flex flex-4 items-center p-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white text-sm fontfont-bold py-2 px-2 rounded"
                        target="_blank"
                        href="https://medium.com/@developer.naren/writing-a-blog-in-laravel-create-a-post-part-2-ae3f67561cfe">Open
                        link</a>
                </div>
            </li>
            <li class="mt-2 flex flex-row">
                <div class="flex flex-1 items-center p-4">
                    <div class="flex-1 pl-1">
                        <div class="text-gray-600 dark:text-gray-200 text-xs sm:text-sm break-words">Name: Laratrust docs
                        </div>
                    </div>
                </div>
                <div class="flex flex-4 items-center p-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white text-sm fontfont-bold py-2 px-2 rounded"
                        target="_blank" href="https://laratrust.santigarcor.me/docs/6.x/">Open link</a>
                </div>
            </li>
            <li class="mt-2 flex flex-row">
                <div class="flex flex-1 items-center p-4">
                    <div class="flex-1 pl-1">
                        <div class="text-gray-600 dark:text-gray-200 text-xs sm:text-sm break-words">Name: Laravel docs
                        </div>
                    </div>
                </div>
                <div class="flex flex-4 items-center p-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white text-sm fontfont-bold py-2 px-2 rounded"
                        target="_blank" href="https://laravel.com/docs/4.2">Open link</a>
                </div>
            </li>
            <li class="mt-2 flex flex-row">
                <div class="flex flex-1 items-center p-4">
                    <div class="flex-1 pl-1">
                        <div class="text-gray-600 dark:text-gray-200 text-xs sm:text-sm break-words">Name: Tailwindcss docs & components
                        </div>
                    </div>
                </div>
                <div class="flex flex-4 items-center p-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white text-sm fontfont-bold py-2 px-2 rounded"
                        target="_blank" href="https://tailwindcss.com/">Open link</a>
                </div>
            </li>
            <li class="mt-2 flex flex-row">
                <div class="flex flex-1 items-center p-4">
                    <div class="flex-1 pl-1">
                        <div class="text-gray-600 dark:text-gray-200 text-xs sm:text-sm break-words">Name: Codegrepper docs
                        </div>
                    </div>
                </div>
                <div class="flex flex-4 items-center p-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white text-sm fontfont-bold py-2 px-2 rounded"
                        target="_blank" href="https://www.codegrepper.com/">Open link</a>
                </div>
            </li>
            <li class="mt-2 flex flex-row">
                <div class="flex flex-1 items-center p-4">
                    <div class="flex-1 pl-1">
                        <div class="text-gray-600 dark:text-gray-200 text-xs sm:text-sm break-words">Name: Codepen
                        </div>
                    </div>
                </div>
                <div class="flex flex-4 items-center p-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white text-sm fontfont-bold py-2 px-2 rounded"
                        target="_blank" href="https://codepen.io/">Open link</a>
                </div>
            </li>
        </ul>
    </div>



    @include('layouts.footer')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
