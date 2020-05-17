let listProd = document.getElementById('listProd')
let url = window.location.href
let params = (new URL(url)).searchParams
let idTienda = params.get('tienda')
let imagen = document.getElementById("imagen")
let form = document.getElementById('form-prod')

cargarProductos()

form.addEventListener('submit',function(e){
    e.preventDefault()

    let formData = new FormData(this)
    console.log(imagen.files[0])
    formData.append('imagen', imagen.files[0])
    formData.append('id_tienda', idTienda)
    
    fetch('crearProducto.php',{
        method: 'POST',
        body: formData
    })
    
    
})

function cargarProductos() {
    let xhttp = new XMLHttpRequest()
    xhttp.onload = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            let productos = JSON.parse(xhttp.responseText)
            let template = ''

            productos.forEach(producto => 
                template += `
                    <div class="py-2 row mx-2 border-bottom">
                        <div class="col-4">
                            <img src="imagenes/${producto.imagen}"  class="img-thumbnail">
                        </div>
                        <div class="col-8">
                            <h2 class="blog-post-title">${producto.nombre}</h2>
                            <p class="blog-post-meta">Valor: $${producto.valor} </p>
                            <p>${producto.descripcion}</p>
                        </div>
                    </div>
                `
            )
            
            listProd.innerHTML = template
        }
    }
    xhttp.open('GET', `mostrarProductos.php?idTienda=${idTienda}`, true)
    xhttp.send()
}

function vaciarCampos(){

}
