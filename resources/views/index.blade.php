<!DOCTYPE html>
<html>
    <head>
        <title>Las mejores películas de... | Powered by Filmaffinity</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type='application/javascript' src='js/vendor/fastclick.js'></script>
        <script type="text/javascript" src="js/app.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div id="title">Las mejores películas de...</div>
                <span id="subtitle">
                    Toy project by <a href="http://twitter.com/ojoven" target="_blank">@ojoven</a>, powered by Filmaffinity
                </span>
                <input type="search" id="search" placeholder="Busca por actor o director...">
                <span id="to-random-container">
                    <a id="to-random" href="#">
                        Sugiéreme al azar
                        <i class="fa fa-random"></i>
                    </a>
                </span>
                <div id="results">

                    @include('single')

                </div>
                <div id="loader"></div>
            </div>
        </div>

        <script>

            var urlBase = "<?php echo url() . "/"; ?>";

        </script>

    </body>
</html>
