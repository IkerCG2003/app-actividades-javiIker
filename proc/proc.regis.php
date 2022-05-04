<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // recuperar datos formulario
$nom = $_POST['name'];
$cor = $_POST['mail'];
$pas = $_POST['pass'];

$longCon = strlen($pas); // longitud de la contraseña

// condicionales para el insert

if ($longCon > 10) {
    echo "la contraseña es muy larga, no puede tener más de 10 dígitos";
}else {
    $conexion = mysqli_connect('localhost','root','','bd_javiker');
    $sql = "INSERT INTO `tbl_registros` (`nombre`,`correo`,`contraseña`) VALUES ('$nom','$cor','$pas');";
    $insert = mysqli_query($conexion,$sql);
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Usuario creado',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Volver'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
        }
        aviso('../view/actividades.html');
    </script>
    <?php
}
    ?>
</body>
</html>