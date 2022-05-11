<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../css/registro.css">
        <title>Página de registro</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html">#Index</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 50vh;">
                        <li class="nav-item">
                            <a class="nav-link" href="../view/nosotros.html">Sobre Nosotros</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../view/actividades.html">Actividades</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="fadeIn first">
                    <h2>Página de registro</h2>
                </div>

                <form action="../proc/proc.regis.php" method="post">
                    <input type="text" id="name" class="fadeIn second" name="name" placeholder="name">
                    <input type="text" id="mail" class="fadeIn second" name="mail" placeholder="mail">
                    <input type="password" id="password" class="fadeIn third" name="pass" placeholder="password">
                    <input type="submit">
                </form>

                <!-- <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div> -->
            </div>
        </div>
    </body>
</html>