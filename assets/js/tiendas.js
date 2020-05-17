document.addEventListener('DOMContentLoaded',function(e){
    
    const tiendasInfo = document.querySelector("#tiendasInfo")
    const formTiendas = {
        nombre: document.getElementById("nombreTienda"),
        fecha_apertura: document.getElementById("fechaApertura"),
        enviar: document.getElementById("form-tiendas")
    }
    
    
    cargarTiendas();
    
    formTiendas.enviar.addEventListener('submit',function(e){
        e.preventDefault()
        xhr = new XMLHttpRequest()
        xhr.onload = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                cargarTiendas()
                vaciarCampos()
            }   
        }
        const requestData = `nombre=${formTiendas.nombre.value}&fecha_apertura=${formTiendas.fecha_apertura.value}`
        console.log(requestData);
        xhr.open('POST','crearTienda.php',true)
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(requestData)
    })
    
    function cargarTiendas() {
        xhr = new XMLHttpRequest()
        xhr.onload = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                tiendas = JSON.parse(xhr.responseText)
                let template = ''
    
                tiendas.forEach(tienda => 
                    template += `
                    <tr>
                        <td>${tienda.id}</td>
                        <td> <a href="index.php?page=productos&tienda=${tienda.id}">${tienda.nombre}</a> </td>
                        <td>${tienda.fecha_apertura}</td>
                        
                    </tr>
                    `
                );
                tiendasInfo.innerHTML = template
                
            }else{
                console.log("Error")
            }
        }
        xhr.open('GET', 'mostrarTiendas.php',true)
        xhr.send()
    }
    
    
    
    
    function vaciarCampos() {
        formTiendas.nombre.value = ""
        formTiendas.fecha_apertura.value = ""
        
    }
    
    
})




