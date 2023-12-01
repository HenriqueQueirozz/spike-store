<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <main>
            <aside>
                <nav></nav>
            </aside>
            @yield('content')
        </main>
        <script src="/js/script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>