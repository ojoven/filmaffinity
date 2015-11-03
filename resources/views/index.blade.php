<!DOCTYPE html>
<html>
    <head>
        <title>Las mejores películas de... | Powered by Filmaffinity</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div id="title">Las mejores películas de...</div>
                <span id="subtitle">
                    Toy project by <a href="http://twitter.com/ojoven" target="_blank">@ojoven</a>, powered by Filmaffinity
                </span>
                <input type="search" id="search" placeholder="Busca por actor o director...">
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
