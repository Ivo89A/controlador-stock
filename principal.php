<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
        .layout {
            width: 100%;
            height: 100vh;
            display: grid;
            grid-template-rows: auto 1fr auto;
            gap: 8px;
        }
        .header {
            grid-row: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .main {
            grid-row: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        footer {
            grid-row: 3;
            display: flex;
            align-items: center;
            justify-content: center;
        }

</style>
<body>
<section class="layout">
<header>
    <nav>
        <div class="pure-menu pure-menu-horizontal">
            <a href="principal.php" class="pure-menu-heading pure-menu-link">Ingreso de Stock</a>
        <ul class="pure-menu-list">
            <li class="pure-menu-item">
            <a href="disponible.php" class="pure-menu-link" >Stock disponible</a>
            </li>
        </ul>
        </div>
        </nav>
<hr>
</header>
<form class="pure-form pure-form-aligned" action="proceso_stock.php">
    <div class="main">
        <div class="pure-control-group">
            <label for="aligned-name">TIPO DE PRODUCTO</label>
            <input type="text" id="aligned-name" name="tipo_prod" placeholder="Nombre de producto" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-name">PRODUCTO</label>
            <input type="text" id="aligned-name" name="prod" placeholder="Nombre de producto" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-foo">PRECIO</label>
            <input type="number" id="precio-container" name="precio" placeholder="Precio" />
        </div>
        <div class="pure-control-group">
            <label for="aligned-foo">FECHA DE VENCIMIENTO</label>
            <input type="date" id="precio-container" name="fecha_vencimiento" placeholder="Precio"/>
        </div>
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Enviar datos</button>
        </div>
    </div>
</form>
<footer>
    <div footer></div>
</footer>
</section>
</body>
</html>