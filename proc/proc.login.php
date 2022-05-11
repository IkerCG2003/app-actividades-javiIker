<?php
// recuperas las variables
$mail = $_POST['mail'];
echo $mail;
$contra = $_POST['contra'];
echo $contra;
$conexion = mysqli_connect('localhost','root','','bd_javiker');
$sql = "SELECT * FROM tbl_registros WHERE correo = '$mail' && contraseña = '$contra'";
$correos = mysqli_query($conexion,$sql);

foreach ($correos as $id) {
    if ($id['correo'] == $mail) {
        session_start();
        $_SESSION['id'] = $id['id'];
        $_SESSION['logged'] = true;
        ?>
        <script>
            window.location = "../view/actividades.php"
        </script>
        <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
            icon: 'success',
            title: 'Usuario correcto',
            text: '',
            showConfirmButton: false,
            footer: '<a href="../view/actividades.php"></a>'
          })
         </script> -->
         <?php
    }else {
        ?>
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <script>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Usuario o contraseña equivocados!',
            footer: '<a href="../login/login.html"></a>'
          })
         </script>

        <?php
    }
}




