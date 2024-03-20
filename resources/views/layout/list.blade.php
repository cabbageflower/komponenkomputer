<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'My App')</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        <header class="bg-blue-800 text-white py-5 text-right p-10">
            @include('components.header')
        </header>

        <h1 class="text-3xl font-bold text-center mt-8">List Produk</h1>
        <div class="container mx-auto px-4 flex justify-center m-10 hover:bg-blue-500">
            <main>
                @yield('content')
            </main>
        </div>

        <footer class="bg-blue-800 text-white py-4 text-center">
            @include('components.footer')
        </footer>
    </body>
</html>
 