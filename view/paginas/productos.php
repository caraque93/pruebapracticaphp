<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container my-4" >
    <div class="row">
        <div class="col-4">

            <h2>Productos</h2>
            <form method="POST" name="form-productos" class="mb-4" action="#" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombreProducto">Nombre del Producto</label>
                    <input type="text" name="nombreProducto" id="nombreProducto" class="form-control">
                </div>

                <div class="form-group">
                    <label for="descripcionProducto">Descripción</label>
                    <textarea name="descripcionProducto" id="descripcionProducto" class="form-control" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="valorProducto">Valor</label>
                    <input type="text" name="valorProducto" class="form-control">
                </div>

                <div class="form-group">
                    <label for="tiendaProducto">Tienda</label>
                    <input type="text" name="tiendaProducto" class="form-control">
                </div>

                <div class="form-group">
                    <label for="imagen" >Imagen</label>
                    <input type="file" name="imagen" class="form-control" id="portada">
                </div>

                
                
                <button type="submit" name="agregarTienda" class="btn btn-dark">Agregar</button>


            </form>
        </div>
        <div class="col-8">
        <div class="row blog-post blog__post">
             
           
            <div class="py-2 row mx-2 border-bottom">
                <div class="col-4">
                    <img src="../../assets/imagenes/zapato.jpg"  class="img-thumbnail">
                </div>
                <div class="col-8">
                    <h2 class="blog-post-title">Nombre del Prod</h2>
                    <p class="blog-post-meta">Valor del prod </p>
                    <p class="blog-post-meta">Tienda en la que se encuentra </p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem illum natus nulla sint maiores cumque eos. Tempora tenetur harum assumenda dolorum atque aliquid. Ut illum ipsam eius velit minus!</p>
                    
                
                </div>
            </div>
            
            

            
            



            


        </div>
        </div>
    </div>
</div>
    
</body>
</html>