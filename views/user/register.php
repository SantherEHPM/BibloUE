<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibloUE-Registro</title>
</head>
<body>
    
    <div>
        <img class="block" alt="icon"/>
        <form method="POST" action="">
            <h2>Registro</h2>
            <label class="block" for="first_name">Nombres</label>
            <input class="block" type="text" name="first_name" placeholder="Nombres"/>
            <label class="block" for="last_name">Apellidos</label>
            <input class="block" type="text" name="last_name" placeholder="Nombres"/>
            <label class="block" for="id">Código de carnet</label>
            <input class="block" type="number" name="id" placeholder="Código de carnet" min="100000"/>
            <label class="block" type="email">Correo institucional</label>
            <input class="block" type="email" name="email" placeholder="Correo institucional"/>
            <label class="block" type="phone">Celular</label>
            <input class="block" type="phone" name="phone" placeholder="Celular"/>
            <label class="block" type="password">Contraseña</label>
            <input class="block" type="password" name="password" placeholder="Contraseña"/>
            <label class="block" name="c_password">Confirmar contraseña</label>
            <input class="block" type="password" name="c_password" placeholder="Confirmar contraseña"/>
            <input type="submit" content="Enviar"/> 
        </form>
    </div>
</body>
</html>