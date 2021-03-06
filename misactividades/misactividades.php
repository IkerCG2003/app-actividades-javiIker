<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e0b63cee0f.js" crossorigin="anonymous"></script>
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html">#Index</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 50vh;">
                    <li class="nav-item">
                        <a class="nav-link" href="../view/nosotros.html">Sobre Nosotros</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/actividades.php">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../misactividades/misactividades.php">Mis Actividades</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- ir a subir -->
                    <a href="../Subiractividad/subiractividad.html" class="btn btn-light form-control me-1" role="button">Upload</a>
                    <!-- ir a login -->
                    <a href="../login/login.html" class="btn btn-light form-control ms-1" role="button">Acceder</a>
                </form>
            </div>
        </div>
    </nav>

    <!-- listado de actividades -->
    <div class="row-c">
        <div class="column-1 padding-m">
            <h4 class="padding-m">Explora</h4>
        </div>
        <?php
        session_start();
           $conexion = mysqli_connect('localhost','root','','bd_javiker');
           $sql = "SELECT * FROM `tbl_actividades` where `asignaAct`='{$_SESSION['id']}';";
           $select = mysqli_query($conexion,$sql);
        
        foreach ($select as $actividad) {
            echo'
            <div class="column-3 padding-mobile">
                <img src="../img/'.$actividad["img"].'" alt="" class="target">
                <div style="float: right;" class="padding-m">
                    <button class="btn btn-light m-1" type="submit"><i class="fa-solid fa-link"></i></button>
                    <button class="btn btn-light m-1" type="submit"><i class="fa-solid fa-heart"></i></button>
                </div>
            </div>';
        
        }
        
        ?>
        
    </div>
</body>

</html>