<?php 
    
    $Titulo = "Gestion de productos";
    $ListaDeEstilos = [  // Define los estilos adicionales
      "../plantillas/header.css",
      "../plantillas/footer.css",
      "./estilos-modal/inicio.css", 
      "./style.css",
      "./estilos-modal/agregar.css"
    ];
    require('../plantillas/cabecera.php'); 
?>
    <main class="main-content">

        <div class="container">

            <section class="inventory">
                <div class="seccion-filtrar">
                    <h1>Inventario</h1>
                    <button class="nuevo_Producto" id="nuevo_Producto">Nuevo producto</button>
                </div>

                <div class="search-filter">
                    <input type="text" id="search-input" placeholder="Nombre del producto..." class="search-input">
                    <button id="filter-btn"><span>&#128269</span></button>
                </div>

                <table id="inventory-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                        // Incluir el archivo select.php y verificar errores
                        try {
                            include("./consultas/select.php");
                        } catch (Exception $e) {
                            echo '<tr><td colspan="4">Error al cargar los productos</td></tr>';
                        }

                        // Mostrar los productos
                        if (!empty($lista_productos)) {
                            foreach($lista_productos as $producto) { ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($producto['idproducto']); ?></td>
                                    <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                                    <td><?php echo htmlspecialchars($producto['descripcion']); ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($producto['idproducto']); ?>"/>
                                            <input type="button" value="Modificar" name="accion" class="btn btn-info"/>
                                            <input type="submit" value="Eliminar" name="accion" class="btn btn-info"/>
                                        </form>
                                    </td>
                                </tr>
                            <?php }
                        } else {
                            echo '<tr><td colspan="4"><center>No hay productos disponibles</center></td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </section>

        
        <section class="modal">
            <div class="modal__container">
                <img src="../img/modal.webp" alt="" class="modal__img">
                <h3 class="modal__title">Bienevenidos a la pagina de administracion</h3>
                <p class="modal__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellendus ipsum illum sequi eum reiciendis animi nobis tenetur. Voluptatibus excepturi natus vel unde voluptatum est amet, nemo nostrum provident fuga.</p>
                <a href="" class="modal__close">Cerrar</a>
            </div>
        </section>

        <section class="modal-agregar" id="modal_agregar">
            <div class="contenedor-agregar">
                <h2 class="titulo-formulario">Agregar nuevo producto al la tienda</h2>
                <form action="" method="post" class="formulario-agregar">
                    
                    <label for="">Nombre del producto:</label>
                    <input type="text"><br>
                    <label for="">Descrpcion:</label>
                    <input type="Descripcion"><br>
                    <label for="">Precio:</label>
                    <input type="text"><br>
                    <label for="">Cantidad:</label>
                    <input type="text"><br>
                    <label for="">Agregar imagen:</label>
                    <input type="file">

                    <div class="modal-agregar-buttons">
                        <button class="buton__agregar" type="">Agregar</button>
                        <button class="buton__cancelar" type="button">Cancelar</button>
                    </div>
                </form>
            </div>
        </section>

        </div>
    </main>
    <script src="./index.js"></script>
    <script src="../plantillas/main.js"></script>
<?php require('../plantillas/pie.php'); ?>
