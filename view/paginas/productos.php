
<div class="container my-4" >
    <div class="row">
        <div class="col-4">

            <h2>Productos</h2>
            <form method="POST" name="form-prod" class="mb-4" id="form-prod"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombreProd">Nombre del Producto</label>
                    <input type="text" name="nombreProd" id="nombreProd" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="descripcionProducto">Descripción</label>
                    <textarea name="descripcionProd" id="descripcionProd" class="form-control" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <label for="valorProducto">Valor</label>
                    <input type="text" name="valorProd" id="valorProd" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="imagen" >Imagen</label>
                    <input type="file" name="imagen" class="form-control" id="imagen" required>
                </div>

                
                
                <button type="submit" name="agregarProd" class="btn btn-dark">Agregar</button>


            </form>
        </div>
        <div class="col-8 border-left">
        <div class="row blog-post" id="listProd">
        
        </div>
        </div>
    </div>
</div>
<script src="assets/js/productos.js"></script>
</body>
</html>