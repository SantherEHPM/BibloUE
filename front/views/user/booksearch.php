<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibloUE-Buscar</title>
</head>
<body>
    <div>
        <img alt="user">
        <span>nombre de usuario</span>  
    </div>
    <header>
        <img src="" alt="icon">
        <form action="">
            <input name="search_area" id="search_area" placeholder="Busca el libro que desees">
                <input name="search" type="submit"/>
            </input>
            <button> Más filtros</button>
            <div>
                <div>
                    <span>Coincidencias en:</span>
                    <div>
                        <div>
                            <label for="autor_check">Autor</label>
                            <input name="autor_check" type="checkbox"/>
                        </div>
                        <div>
                            <label for="titulo_check">Titulo</label>
                            <input name="titulo_check" type="checkbox"/>
                        </div>
                        <div>
                            <label for="description_check">Descripción</label>
                            <input name="description_check" type="checkbox"/>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="filter">Filtrar por:</label>
                    <select name="filter" id="filter" placeholder="Categoría">

                    </select>
                </div>
                <div>
                    <label for="sort">Ordenar:</label>
                    <select name="sort" id="sort" placeholder="Categoría">
                        <option value="0" default>Aspecto de búsqueda</option>
                    </select>
                    <button>
                        <img alt="sort_icon"/>
                    </button>
                </div>
            </div>
        </form>
    </header>
    <section id="results">

    </section>
    <section id="details">
        <div>
            <h1>###Title###</h1>
            <img src="" alt="">
            <img src="" alt="">
            <div>
                <p>
                    Autor: Lorem, ipsum dolor. <br>
                    Año: ###### <br>
                    Categoría: Lorem <br>
                    Descripción: Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eligendi tenetur mollitia quasi unde, id totam deleniti nulla neque voluptatum.
                </p>
                <div>
                    <span>Lorem ipsum dolor sit amet.</span>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, assumenda!
                    </p>
                </div>
                <button>
                    Lorem.
                </button>
            </div>
        </div>
    </section>
    <footer>
        <a>Ver prestamos</a>
    </footer>
    <template>
        <article>
            <img src="" alt="frontpage">
            <div>
                <h2>###Title###</h2>
                <span>Autor:######</span>
                <span>Año:######</span>
                <span>Categoría:######</span>
                <div>
                    <a href="">Solicitar</a>
                    <a href="">Ver más</a>
                </div>
            </div>
        </article>
    </template>
</body>
</html>