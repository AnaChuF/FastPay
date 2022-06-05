/*MOSTRAR DATOS DE CATEGORIA Y PRECIO SEGUN SU PROVEEDOR EN EL FORMULARIO REGISTRO DE SUSCRIPCION*/

$(document).ready(function(){
    viewTable();
    $('#proveedor').change(function(){
      var prov=document.getElementById('proveedor').value;
    //   console.log(prov);
      $.ajax({
        type:"POST",
        url:"Suscripciones/mostrarCategoria.php",
        data:{
          proveedor:prov
        },
        success:function(r){
        //   console.log(r);
          if(r){
              let data = JSON.parse(r);
            //   console.log(data);
              $('#categoria').val(data['nom_cate']);
              $('#preciosus').val(data['precio']);
          }else{
            $('#categoria').val('');
            $('#preciosus').val('');
          }
        }
      });
    });


    $('#txt_proveedor').change(function(){ 
        var prov=document.getElementById('txt_proveedor').value;
        //   console.log(prov);
          $.ajax({
            type:"POST",
            url:"Suscripciones/mostrarCategoria.php",
            data:{
              proveedor:prov
            },
            success:function(r){
            //   console.log(r);
              if(r){
                  let data = JSON.parse(r);
                //   console.log(data);
                  $('#txt_categoria').val(data['nom_cate']);
                  $('#txt_precio').val(data['precio']);
              }else{
                $('#txt_categoria').val('');
                $('#txt_precio').val('');
              }
            }
          });
        })

  });


  /*REGISTRAR LOS DATOS QUE FALTAN EN FORMULARIO REGISTRO DE SUSCRIPCION*/

function agregarSuscripciones(){
    let usuario=document.getElementById('id').value;
    let proveedor=document.getElementById('proveedor').value;
    let inicio=document.getElementById('fecha').value;
    let ciclo=document.getElementById('ciclo').value;
    let recordatorio=document.getElementById('recordatorio').value;
    let tipomone=document.getElementById('moneda').value;

    $.ajax({
        url:'Suscripciones/suscripcionR.php',
        type:'post',
        data:{
            usuario:usuario,
            proveedor:proveedor,
            inicio:inicio,
            ciclo:ciclo,
            recordatorio:recordatorio,
            moneda:tipomone,
            insertar:'suscripcion'
        },
        success:function(res){
            // console.log(res);
            if(res){
                Swal.fire({
                    icon: 'success',
                    title: 'Registro exitoso',
                    showConfirmButton: false,
                    timer: 1500
                  })
                viewTable();
            }
            
        }
    })
}


/* MOSTRAR TABLAS */
function viewTable(){
    let id=document.getElementById('id').value;
    // console.log($id);
    $.ajax({
        url:'Suscripciones/mostrarTabla.php',
        type:'post',
        data:{id:id},
        success:function(res){
            // console.log(res);
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


/* MOSTRAR DETALLES TABLAS */
function detallesTabla(id_regSus){
    $.ajax({
        url:'Suscripciones/mostrarDetalles.php',
        type:'post',
        data:{
            id:id_regSus
        },
        success:function(res){
            // console.log(res);
            if(res){

                try {
                    $('#tableSuscripcion').find('tbody').html(res);

                } catch (error) {
                    console.log('Error: ', error.message);
                }
            }
        }

    })
}

/*EDITAR REGISTRO DE SUSCRIPCIONES*/
function editarSuscripcion(id_regSus){
    $.ajax({
        url:'Suscripciones/suscripcionR.php',
        type:'POST',
        data:{
            id:id_regSus,
            editar:'registro'
        },
        success:function(res){
            if(res){
                // console.log(res)
                let data=JSON.parse(res);
                console.log(data)
                $('#regsus').val(data['id_regSus']);
                $('#txt_inicio').val(data['inicio_sus']);
                $('#txt_ciclo').val(data['id_dura']);
                $('#txt_proveedor').val(data['id_prov']);
                $('#txt_precio').val(data['precio']);
                $('#txt_categoria').val(data['nom_cate']);
                $('#txt_recordatorio').val(data['id_rec']);
                $('#txt_moneda').val(data['id_mon']);

            }
        }
    })

}




/*ACTUALIZAR DATOS DE REGISTRO DE SUSCRIPCION*/
function actualizarSuscripcion(){
    let id=document.getElementById('regsus').value;
    let proveedor=document.getElementById('txt_proveedor').value;
    let inicio=document.getElementById('txt_inicio').value;
    let ciclo=document.getElementById('txt_ciclo').value;
    let recordatorio=document.getElementById('txt_recordatorio').value;
    let tipomone=document.getElementById('txt_moneda').value;
    $.ajax({
        url:'Suscripciones/suscripcionR.php',
        type: 'POST',
        data:{
            id:id,
            prov:proveedor,
            inicio:inicio,
            ciclo:ciclo,
            rec:recordatorio,
            mon:tipomone,
            actualizar:'registro'
        },
        success:function(res){
            // console.log(res)
            if(res==1){
                //console.log('hecho');
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'Datos actualizados'
                });
                viewTable();
            }
        }

    })
}



/*ELIMINAR REGISTROS EN LA TABLA R. SUSCRIPCION*/
function eliminarSuscripcion(id_regSus){
    Swal.fire({
        title: '¿Estas seguro de querer eliminar?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, eliminar!'
      }).then((result) =>{
        if(result.isConfirmed){
            $.ajax({
                url:'Suscripciones/suscripcionR.php',
                type: 'POST',
                data:{
                    id:id_regSus,
                    eliminar:'registro',
                },
                success:function(res){
                    console.log(res);
                    if(res==1){
                        Swal.fire('Eliminado', 'Registro Eliminado', 'success');
                        viewTable();
                    }
                }
            })
        }

    })
}
