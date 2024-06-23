
<?php 
    // Verificar si el archivo existe antes de incluirlo
    if (file_exists('../configuraciones/bd.php')) {
        include_once('../configuraciones/bd.php');
    } else {
        error_log('El archivo bd.php no se encuentra en la ruta especificada');
        die('El archivo bd.php no se encuentra en la ruta especificada');
    }
    
    // Verificar si la clase BD existe después de incluir el archivo
    if (!class_exists('BD')) {
        error_log('La clase BD no se encuentra definida');
        die('La clase BD no se encuentra definida');
    }
    
    $conexionBD = BD::CrearInstancia();
    // Resto del código
    
      
    $sentencia=$conexionBD->prepare("select * from tblproductos");
    $sentencia->execute();
    $lista_productos =  $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>