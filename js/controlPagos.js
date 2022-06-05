$(document).ready(function(){
    //mostrarPagos();

    
})

function mostrarPagos(){
    $.ajax({
        url:'Pagos/ControlPagos.php',
        type:'post',
        success:function(res){
            // console.log(res);
            // if(res){

            //     try {
            //         $('#tablaProveedores').find('tbody').html(res);

            //     } catch (error) {
            //         console.log('Error: ', error.message);
            //     }
            // }
        }
    })
}


function buscarRegistro(){
    let id =document.getElementById('idRegistro').value;
    $.ajax({
        url:'Pagos/pagos.php',
        type:'post',
        data:{
            id:id,
            buscar:'registro'
        },
        success:function(res){
            if(res){
                let data=JSON.parse(res);
                let precio=JSON.parse(data['precio']);
                let subtotal = precio*(18/100);
                let total = precio+subtotal;

                $('#precioSus').val(precio);
                $('#igv').val(subtotal);
                $('#pagoTotal').val(total);

            }
        }
    })
}


// INSERTAR Datos
function registrarPagos() {
    let id =document.getElementById('idRegistro').value;
    let importe=document.getElementById('precioSus').value;
    let igv=document.getElementById('igv').value;
    let pagototal=document.getElementById('pagoTotal').value;
    let estadoPago=document.getElementById('estadoPago').value;
    let tipoPago=document.getElementById('tipoPago').value;
    let comprobante=document.getElementById('comprobante').value;

    $.ajax({
        type:"POST",
        url:'Pagos/pagos.php',
        data:{
            id:id,
            importe:importe,
            igv:igv,
            pagototal:pagototal,
            estadoPago:estadoPago,
            tipoPago:tipoPago,
            comprobante:comprobante,
            insertar:'registro'
        },
        success:function(r){
            console.log(r);
            
        }
    });
}