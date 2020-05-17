<?php
// $tienda = new TiendasController();

// if (isset($_POST['agregarTienda'])) {
//     $datos = array( 
//         'nombre' => $_POST['nombreTienda'],
//         'fecha_apertura' => $_POST['fechaApertura']
//     ); 

//     $respuesta = $tienda->agregarTienda($datos);

    
    
   
// }

// $tabla = $tienda->mostrarTiendas();



?>

<div class="container my-4" >
    <div class="row">
        <div class="col-4">
            <h2>Tiendas</h2>
            <form  name="form-tiendas" class="mb-4" id="form-tiendas">
                <div class="form-group">
                    <label for="nombreTienda">Nombre</label>
                    <input type="text" name="nombreTienda" id="nombreTienda"class="form-control">
                </div>
                <div class="form-group">
                    <label for="fechaApertura">Fecha de Apertura</label>
                    <input type="date" name="fechaApertura" id="fechaApertura"class="form-control" >
                </div>
                
                <button type="submit" name="agregarTienda" id="agregarTienda" class="btn btn-dark">Agregar</button>


            </form>
        </div>
        <div class="col-8">
        <table class="table">
            <thead class="thead-dark">
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha de apertura</th>
                
            </thead>
            <tbody id="tiendasInfo">

            <?php
                if(isset($tabla)){

                    foreach ($tabla as $r) {
            ?>
                <tr>
                        <!-- <td><?=$r['id']?></td>
                        <td> <a href="index.php?page=productos&tienda=<?=$r['id']?>"><?=$r['nombre']?></a> </td>
                        <td><?=$r['fecha_apertura']?></td> -->
                </tr>
            
            
            <?php
                        
                    }
                }
            
            ?>
                
            </tbody>
        </table>
        </div>
    </div>
</div>

<script src="assets/js/tiendas.js"></script>
    
</body>
</html>