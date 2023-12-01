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
            
        </style>
    </head>
    <body>
        <main>
           <button id="btn-system-acess" class="btn btn-large btn-green bold" type="button" onclick="redirectSellers();">Acessar o sistema</button>
        </main>
        <script>
            function redirectSellers(){
                window.location.href = "/vendedores";
            }
        </script>
    </body>
</html>