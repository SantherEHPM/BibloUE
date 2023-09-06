<!DOCTYPE html>
<html lang="en">
<?php
require_once('../../scripts/templates/base.php');
printHead('Sign Up-BiblioUE');
?>
<body>
    <div>
        <img class="block" alt="icon"/>
        <form method="GET" action="">
            <h2>Registro</h2>
            <label class="block" for="first_name">Nombres</label>
            <input class="block" type="text" name="first_name" id="first_name" placeholder="Nombres"/>
            <label class="block" for="last_name">Apellidos</label>
            <input class="block" type="text" name="last_name" id="last_name" placeholder="Nombres"/>
            <label class="block" for="id">Código de carnet</label>
            <input class="block" type="number" name="carnet" id="carnet" placeholder="Código de carnet" min="100000"/>
            <label class="block" type="email">Correo institucional</label>
            <input class="block" type="email" name="email" id= "email" placeholder="Correo institucional"/>
            <label class="block" type="phone" for="cellphone">Celular</label>
            <input class="block" type="phone" name="cellphone" id="cellphone" placeholder="Celular"/>
            <label class="block" type="password">Contraseña</label>
            <input class="block" type="password" name="password" id="password" placeholder="Contraseña"/>
            <label class="block" name="c_password">Confirmar contraseña</label>
            <input class="block" type="password" name="c_password" id="c_password" placeholder="Confirmar contraseña"/>
            <input type="submit" content="Enviar"/> 
        </form>
    </div>
    <?php
    printScripts(array('validations/register.js'));
    ?>
</body>
</html>