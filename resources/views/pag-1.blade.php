<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel - Pagina 1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            }

            .header-top {
                background-color: darkgoldenrod;
                color: lightgoldenrodyellow;
                padding: 1rem;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .title {
                font-size: 4rem;
                text-transform: uppercase;
                text-align: center;
            }

            .header-bottom {
                background-color: goldenrod;
                color: lightgoldenrodyellow;
                padding: 1rem;
            }

            ul {
                list-style: none;
            }

            a {
                color: lightgoldenrodyellow;
                padding: 0 0.5rem;
                margin: 1.5rem;
                font-size: 1.5rem;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            a:hover {
                color: white;
            }

            .main-content {
                margin-top: 6rem;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="header-top">
                <div class="flex-center">
                    <h1 class="title">laravel - primi passi</h1>
                </div>
            </div>
            <nav class="header-bottom">
                <ul class="flex-center">
                    <li>
                        <a href="/">home</a>
                    </li>
                    <li>
                        <a href="pag-1">pagina 1</a>
                    </li>
                    <li>
                        <a href="pag-2">pagina 2</a>
                    </li>
                    <li>
                        <a href="pag-3">pagina 3</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="main-content flex-center">
                <h2 class="title">questa è la pagina <br> "1"</h2>
            </div>
        </main>
    </body>
</html>