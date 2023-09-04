<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibloUE-Dashboard</title>
</head>
<body>
    <header>
        <button>
            <img alt="menu">
        </button>
        <div>
        <img src="" alt="icon">
        <span>Dashboard</span>
        <h1>Administradores</h1>
        </div>
        <div>
            <img alt="user">
            <span>nombre de usuario</span>  
        </div>
        <form>
            <div>
                <input type="text" name="search" placeholder="Buscar"/>
                <input type="submit" name="submit"/>
            </div>
            <select name="aspect" id="aspect">
                <option value="0" default>Aspecto de búsqueda</option>
            </select>
        </form>
    </header>
    <table id="results">
        <tr>
            <th id="selection"></th>
            <th id="id">ID</th>
            <th id="first_name">NOMBRES</th>
            <th id="last_name">APELLIDOS</th>
            <th id="email">CORREO</th>
            <th id="role">ROL</th>
            <th id="state">ESTADO</th>
            <th id="editor"></th>
        </tr>
    </table>
</body>
</html>