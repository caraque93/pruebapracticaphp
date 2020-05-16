<?php

if (!isset($_GET['page'])) {
    header('Location: index.php?page=tiendas');
}

$idTienda = $_GET['tienda'];
$producto = new ProductosController();

if (isset($_POST['agregarProd'])) {
    
    $validarImagen = $producto->validarImagen($_FILES['imagen']);
    
    $respuestaValidacion = json_decode($validarImagen, true);
    
    if($respuestaValidacion['codigo'] == 200){
        $datos =$datos = array(
            'nombre' => $_POST['nombreProd'],
            'descripcion' => $_POST['descripcionProd'],
            'valor' => $_POST['valorProd'],
            'id_tienda' => $idTienda,
            'imagen_file' => $_FILES['imagen']
            );

        $agregar = $producto->agregarProducto($datos);
        
    }   
    
    
    
}

$listProd = $producto->mostrarProductos($idTienda);


?>

<div class="container my-4" >
    <div class="row">
        <div class="col-4">

            <h2>Productos</h2>
            <form method="POST" name="form-prod" class="mb-4" action="#" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombreProd">Nombre del Producto</label>
                    <input type="text" name="nombreProd" id="nombreProducto" class="form-control">
                </div>

                <div class="form-group">
                    <label for="descripcionProducto">Descripción</label>
                    <textarea name="descripcionProd" id="descripcionProducto" class="form-control" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="valorProducto">Valor</label>
                    <input type="text" name="valorProd" class="form-control">
                </div>

                <div class="form-group">
                    <label for="imagen" >Imagen</label>
                    <input type="file" name="imagen" class="form-control" id="portada">
                </div>

                
                
                <button type="submit" name="agregarProd" class="btn btn-dark">Agregar</button>


            </form>
        </div>
        <div class="col-8 border-left">
        <div class="row blog-post blog__post">
             
             <?php
            if (!empty($listProd)) {
                foreach ($listProd as $lp) {
            ?>
            
            <div class="py-2 row mx-2 border-bottom">
                <div class="col-4">
                    <img src="imagenes/<?=$lp['imagen']?>"  class="img-thumbnail">
                </div>
                <div class="col-8">
                    <h2 class="blog-post-title"><?=$lp['nombre']?></h2>
                    <p class="blog-post-meta">Valor: $<?=$lp['valor']?> </p>
                    <p><?=$lp['descripcion']?></p>
                    
                
                </div>
            </div>
            
            <?php        
                }
            }
            ?>
           
            
            

            
            



            


        </div>
        </div>
    </div>
</div>
    
</body>
</html>