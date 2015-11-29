<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Moncef|me - Home</title>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
<script src="html5shiv/dist/html5shiv.js"></script>
<![endif]-->

    </head>
        <body>
            <!-- Rajouter le menu -->
            <?php include("menu.php"); ?>
            <video style="position: fixed;right: 0;bottom: 0;width: auto;min-width: 100%;height: auto;min-height: 100%;z-index: -80;background: transparent url(video-bg.jpg) no-repeat;background-size: cover;opacity:.50;-moz-opacity:.50;filter:alpha(opacity=50);" id="BackgroundVid" autoplay loop>
                <source src="img/file.mp4" type="video/mp4"/> <!--Je devrais mettre ma propre vidéo-->
            </video>
            <div class="outsideMenu">
                <header>
                    <h1 class="text-center" id="titrePrincipal">Moncef<span class="yellow">.</span>me</h1>
                </header>
                <article class="text-center">
                    <p>I am a young student in engineering</p>
                    <p>Here is my <a href="cv.php">curriculum vitae</a></p>
                    <p>I am still working on this website</p>
                </article>
            </div>

            <script src="http://code.jquery.com/jquery-latest.js"></script>
            <script src="js/bootstrap.js"></script>
        </body>
</html>

