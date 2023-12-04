<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Spike store</title>
        <link rel="stylesheet" href="/css/style.css">
        <style>
            main{
                background-color: #1B1C1E;
            }

            #btn-system-acess {
                position: absolute;
                bottom: 18%;
                left: 0;
                right: 0;
                margin: 0 auto; 
            }

            #banner_apresentacao{
                width: 80%;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: auto;
            }

            #banner_apresentacao h1{
                color: #DDE2DE;
                font-size: 100px;
            }

            #banner_apresentacao img{
                width: 40%;
            }
            
        </style>
    </head>
    <body>
        <main>
            <div id="banner_apresentacao">
                <h1>Spike Store</h1>
                <img src="/img/spike.png" alt="Cacto sorridente">
            </div>
           <button id="btn-system-acess" class="btn btn-large btn-rounded btn-green bold" type="button" onclick="redirectSellers();">Acessar o sistema</button>
        </main>
        <script>
            function redirectSellers(){
                window.location.href = "/vendedores";
            }
        </script>
    </body>
</html>