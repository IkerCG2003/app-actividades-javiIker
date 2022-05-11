<?php
    //si no lleno campos recarga misma pag
    if(isset($_POST["Nombre"])&& isset($_POST["actividad"]) && isset($_POST["tiempo"]) && isset($_FILES["archivo"]) && isset($_POST["Comentarios"]))
    { 
           //llamo a las variables 
       $Nombre = $_POST["Nombre"];
    $actividad = $_POST["actividad"];
    $tiempo = $_POST["tiempo"];
    $archivo = $_FILES["archivo"];
    $Comentarios = $_POST["Comentarios"];
    
    //subir img
    move_uploaded_file($archivo['tmp_name'], "../img/".$archivo['name']);


    //conectar bd
    $conexion = mysqli_connect('localhost','root','','bd_javiker');
    //insertamos en bd
    session_start();
    $sql = "INSERT INTO `tbl_actividades` (`id`, `nombreAct`, `asignaAct`, `duraAct`, `descrAct`, `img`,`Topico`) VALUES (NULL, '$Nombre', '{$_SESSION['id']}', '$tiempo', '$Comentarios', '{$archivo['name']}' , '$actividad');";
    $Insert = mysqli_query($conexion,$sql);
    ?>
        
    <script>
 window.location = "../view/actividades.php"
</script>
<?php   

    }else{ 
    ?>
        
           <script>
        window.location = "../Subiractividad/subiractividad.html"
    </script>
<?php   
      
     
    }
      ?>
