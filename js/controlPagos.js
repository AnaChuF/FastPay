$(document).ready(function(){
    mostrarPagos();
    $('#divPago').hide();
    $('#divDetalles').hide();
    $('#alertSuccess').hide();
    $('#alertWarning').hide();
    $('#alertDanger').hide();
    
})

$('#buscar').keyup(function(){
    limpiar();
})


function mostrarPagos(){
    $.ajax({
        url:'Pagos/mostrarRegistros.php',
        type:'post',
        success:function(res){
            if(res){

                try {
                    $('#tablaRegistros').find('tbody').html(res);
                } catch (error) {
                    console.log('Error: ', error.message);
                }
            }
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
            if(r==1){
                Swal.fire({
                    icon:'success',
                    title: 'Éxito',
                    text: 'Registro de Pago registrado'
                });
                mostrarPagos();
            }
        }
    });
}

function buscarCategoria(){
    let categoria=document.getElementById('buscar').value;
    $.ajax({
        url:'Pagos/pagos.php',
        type:'post',
        data:{
            categoria:categoria,
            busqueda:'categoria'
        },
        success: function(res){
            if(res){
                try {
                    $('#tablaRegistros').find('tbody').html(res);
                } catch (error) {
                    console.log('Error: ', error.message);
                }
            }
        }
    })
}

function mostrarAlertas(id){
    $.ajax({
        type:'post',
        url:'Pagos/pagos.php',
        data:{
            id:id,
            mostrar:'datos'
        },
        success:function(res){
            if(res){
                let data=JSON.parse(res);

                $('#servicioSuscrito').val(data['nom_prov']);
                $('#mostrarCategoria').val(data['nom_cate']);
                $('#tipoP').val(data['tipo_de_pago']);

                $('#metodoP').val(data['tipo_de_pago']);
                $('#estadoP').val(data['estado_pago']);
                $('#comprobanteP').val(data['tipo_comprobantepago']);

                if(data['estado_pago']=='PAGO CANCELADO'){
                    $('#divPago').show();
                    $('#divDetalles').show();
                    $('#alertSuccess').show();

                    $('#alertDanger').hide();

                }else if(data['estado_pago']=='PAGO ATRASADO'){
                    $('#divPago').show();
                    $('#divDetalles').show();
                    $('#alertDanger').show();

                    $('#alertSuccess').hide();
                }
            }
        }
    })
}

function limpiar(){
    let buscar=document.getElementById('buscar').value;
    if(buscar==''){
        mostrarPagos();
    }
}

