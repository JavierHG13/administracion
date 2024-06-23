<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo isset($Titulo) ? htmlspecialchars($Titulo) : 'Sin título'; ?></title>
    
    <link rel="stylesheet" href="../plantillas/footer.css">
    <link rel="stylesheet" href="../plantillas/footer.css">

    <?php 
    // Imprime todo los estilos que traiga la pagina al ser cargada
    if (isset($ListaDeEstilos) && is_array($ListaDeEstilos)) {
        foreach ($ListaDeEstilos as $Estilo) {
            echo '<link rel="stylesheet" href="' . htmlspecialchars($Estilo) . '">' . "\n";
        }
    } 
    ?>

</head>
<body>
    <div class="container">
        <header>
            <nav id="sidebar">
                <div class="toggle-btn" id="toggle-btn">
                    <span>&#9776;</span>
                </div>
                 <ul>
                    <li><img src="../img/iconos/administrador.png" alt="" class="logo-administrador"></li>
                    <a href="../home/index.php" class="nav-link"><li>Home</li></a>
                    <li><a href="../inventario/index.php" class="nav-link">Inventario</a></li>
                    <li><a href="../servicios/index.php" class="nav-link">Servicios</a></li>
                    <li><a href="../envios/index.php" class="nav-link">Envios</a></li>
                    <li><a href="../devoluciones/index.php" class="nav-link">Devoluciones</a></li>
                    <li><a href="../productos/index.php" class="nav-link">Mi tienda</a></li>
                    <li><a href="../index.php" class="nav-link">Salir</a></li>
                </ul>
            </nav>
        </header>