<!DOCTYPE html>
<html lang="en">
<?php 
include("./scripts/templates/base.php"); 
printHead('Inicio');
?>
<body class="flex-c-nw-cc s-screen-screen bg-gray-10">
    <div class="sh-270-0-primary-6 b-primary-9-2 p-10-px">
        <img class="block" alt="icon" src="./assets/img/icon.svg"/>
        <form method="get" action="" id="login">
            <h1>Iniciar sesión</h1>
            <label class="block">Correo</label>
            <input class="block" type="text" name="email" id="email" autocomplete/>
            <label class="block">Contraseña</label>
            <input class="block" type="password" id="password" autocomplete/>
            <input type="submit" content="Enviar" name="submit"/> 
        </form>
        <a href="<?php echo $root ?>views/user/register.php">Registro</a>
    </div>
<?php printScripts(array('validations/login.js')); ?>
</body>
</html>