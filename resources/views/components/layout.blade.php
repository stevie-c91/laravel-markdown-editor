<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Example Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
<nav class="bg-gray-800">
    <div class="max-w-3xl mx-auto">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button
                    type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white
                        hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="block h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                    <svg
                        class="hidden h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <svg
                            width="177"
                            height="100"
                            class="block h-8 w-auto"
                            viewBox="0 0 177 100"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M98.9315 39.4284C96.1883 36.6852 92.9316 34.5091 89.3475 33.0245C85.7633
                                31.5399 81.9219 30.7758 78.0424 30.7758C74.1629 30.7758 70.3215 31.5399
                                66.7373 33.0245C63.1532 34.5091 59.8965 36.6852 57.1533
                                39.4284L78.0424 60.3174L98.9315 39.4284Z"
                                fill="#FFD200"
                            />
                            <path
                                d="M78.0686 60.3475C80.8118 63.0907 84.0684 65.2667 87.6526 66.7513C91.2367 68.2359
                                95.0782 69 98.9577 69C102.837 69 106.679 68.2359 110.263 66.7513C113.847 65.2667
                                117.104 63.0907 119.847 60.3475L98.9577 39.4584L78.0686 60.3475Z"
                                fill="#06E07F"
                            />
                            <path
                                d="M78.017 60.3429C75.2738 63.0861 72.0171 65.2621 68.433 66.7467C64.8488 68.2313
                                61.0074 68.9954 57.1279 68.9954C53.2484 68.9954 49.407 68.2313 45.8228
                                66.7467C42.2387 65.2621 38.982 63.0861 36.2388 60.3429L57.1279
                                39.4538L78.017 60.3429Z"
                                fill="#E3073C"
                            />
                            <path
                                d="M98.9831 39.433C101.726 36.6898 104.983 34.5138 108.567 33.0292C112.151 31.5446
                                115.993 30.7805 119.872 30.7805C123.752 30.7805 127.593 31.5446 131.177
                                33.0292C134.761 34.5138 138.018 36.6898 140.761 39.433L119.872
                                60.3221L98.9831 39.433Z"
                                fill="#1F84EF"
                            />
                        </svg>
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a
                            href="{{ route('home') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm
                            font-medium"
                        >
                            Home
                        </a>
                        <a
                            href="{{ route('posts.index') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm
                            font-medium"
                        >
                            Posts
                        </a>
                        <a
                            href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm
                            font-medium"
                        >
                            Contact
                        </a>
                        <a
                            href="{{ route('posts.create') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm
                            font-medium"
                        >
                            New post
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a
                href="{{ route('home') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base
                font-medium"
            >
                Home
            </a>
            <a
                href="{{ route('posts.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base
                font-medium"
            >
                Posts
            </a>
            <a
                href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base
                font-medium"
            >
                Contact
            </a>
            <a
                href="{{ route('posts.create') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base
                font-medium"
            >
                New post
            </a>
        </div>
    </div>
</nav>

<div class="max-w-3xl mx-auto my-10">
    {{ $slot }}
</div>

<footer class="bg-gray-800 pt-10 sm:mt-10 pt-10">
    <div class="max-w-3xl mx-auto pb-6">
        <div class="max-w-4xl mx-auto text-gray-800 flex">
            <div class="w-1/2 sm:w-4/12 md:w-3/12">
                <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                    Blog links
                </div>
                <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium">
                    Link 1
                </a>
                <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium">
                    Link 2
                </a>
            </div>
            <div class="w-1/2 sm:w-4/12 md:w-3/12">
                <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                    More links
                </div>
                <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium">
                    Link 1
                </a>
                <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium">
                    Link 2
                </a>
            </div>
        </div>
    </div>
</footer>

@if (request()->routeIs('posts.create'))
    <script src="{{ asset('js/app.js') }}"></script>
@endif

</body>
