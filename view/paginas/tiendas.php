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
    <h2>Tiendas</h2>
        <div class="col-4">
            <form method="POST" name="form-tiendas" class="mb-4" action="#">
                <div class="form-group">
                    <label for="nombreTienda">Nombre</label>
                    <input type="text" name="nombreTienda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fechaApertura">Fecha de Apertura</label>
                    <input type="date" name="fechaApertura" class="form-control" >
                </div>
                
                <button type="submit" name="agregarTienda" class="btn btn-dark">Agregar</button>


            </form>
        </div>
        <div class="col-8">
        <table class="table">
            <thead class="thead-dark">
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha de apertura</th>
                
            </thead>
            <tbody id="articlesData">
                
            </tbody>
        </div>
    </div>
</div>
    
</body>
</html>