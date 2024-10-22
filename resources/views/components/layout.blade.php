<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>My Website</title>
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Vendor Stylesheets(used by this page)-->
        <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="h-full">
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="container px-4 sm:px-6 lg:px-8">
                    <div class="flex h-20 items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img
                                    class="h-8 w-8"
                                    src="https://laracasts.com/images/logo/logo-triangle.svg"
                                    alt="Your Company"
                                />
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <x-nav-link href="/app" :active="request()->is('app')">Home</x-nav-link>
                                    <x-nav-link href="/posts" :active="request()->is('posts')">Posts</x-nav-link>
                                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                @guest
                                    <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                                    <x-nav-link href="/register" :active="request()->is('register')">
                                        Register
                                    </x-nav-link>
                                @endguest

                                @auth
                                    <x-nav-link href="/dashboard" :active="request()->is('dashboard')">
                                        Dashboard
                                    </x-nav-link>
                                    <form method="POST" action="/logout" class="ml-2">
                                        @csrf

                                        <x-form-button>Logout</x-form-button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="sticky top-0 z-50 bg-white shadow-sm">
                <div class="container px-4 py-6 sm:flex sm:justify-between sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                        {{ $heading }}
                    </h1>
                </div>
            </header>

            <main>
                <div class="container py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>

        <!--begin::Javascript-->
        <script>
            var hostUrl = '/assets/';
        </script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="/assets/plugins/global/plugins.bundle.js"></script>
        <script src="/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="/assets/js/widgets.bundle.js"></script>
        <script src="/assets/js/custom/widgets.js"></script>
        <script src="/assets/js/custom/apps/chat/chat.js"></script>
        <script src="/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="/assets/js/custom/utilities/modals/create-app.js"></script>
        <script src="/assets/js/custom/utilities/modals/users-search.js"></script>
        <!--end::Page Custom Javascript-->
        <!--end::Javascript-->
    </body>
</html>
