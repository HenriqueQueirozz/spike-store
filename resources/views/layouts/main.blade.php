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
                <nav id="navigation-bar">
                    <ul>
                        <li>
                            <a href="/seller"><button class="btn btn-nav btn-darkGreen bold"><ion-icon name="people-outline"></ion-icon><span>Vendedores</span></button></a>
                        </li>
                        <li>
                            <a href="/sale"><button class="btn btn-nav btn-darkGreen bold"><ion-icon name="cart-outline"></ion-icon><span>Vendas</span></button></a>
                        </li>
                    </ul>
                </nav>
            </aside>
            @yield('content')
        </main>
        <script src="/js/script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>