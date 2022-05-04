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