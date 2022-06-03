$(document).ready(function(){
    $('#proveedor').hide();
    $('#nombre').hide();
    $('#apellido').hide();
    
    mostrarProveedores();
    mostrarCategoria();

    $("#rol").change(function(){
        tipoProveedor();
    })
})

function tipoProveedor(){
    let tipo=document.getElementById('rol').value;

    if(tipo=='Persona Juridica'){
        $('#proveedor').hide();
        $('#nombre').show();
        $('#apellido').show();
    }else if(tipo=='Empresa'){
        $('#proveedor').show();
        $('#nombre').hide();
        $('#apellido').hide();
    }else if(tipo==''){
        $('#proveedor').hide();
        $('#nombre').hide();
        $('#apellido').hide();
    }
}

function agregarCategoria(){

    let cat=document.getElementById('otcat').value;
    console.log(cat);
    $.ajax({
        url:'Proveedores/proveedor.php',
        type:'post',
        data:{
            categoria:cat,
            agregar:'categoria'
        },
        success:function(res){
            //console.log(res);
            if (res==1) {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'Categoria Agregada'
                });
            }
        }
    })
}

function mostrarCategoria(){
    $.ajax({
        url:'Proveedores/mostrarCategoria.php',
        type:'post',
        success:function(res){
            
            if(res){
                //console.log(res);
                try {
                    $('#categoria').html(res);
                    //$('#tablaProveedores').find('tbody').html(res);
                } catch (error) {
                    console.log(error.message);
                }
                
            }

        }

    })
}

function agregarProveedor(){
    let cat=document.getElementById('categoria').value;
    let rol=document.getElementById('rol').value;
    let proveedor=document.getElementById('proveedor').value;
    let nombre=document.getElementById('nombre').value;
    let apellido=document.getElementById('apellido').value;
    let precio=document.getElementById('precio').value;

    $.ajax({
        url:'Proveedores/proveedor.php',
        type:'post',
        data:{
            categoria:cat,
            rol:rol,
            proveedor:proveedor,
            nombre:nombre,
            apellido:apellido,
            precio:precio,
            insertar:'proveedor'
        },
        success:function(res){
            if(res==1){
                //console.log(res);
                Swal.fire({
                    icon:'success',
                    title: 'Éxito',
                    text: 'Proveedor Agregado'
                });
                registrarProveedor.reset();
                tipoProveedor();
                mostrarProveedores();
            }
            
        }
    })
}

function editarProveedor(id){
    $.ajax({
        url:'Proveedores/proveedor.php',
        type:'post',
        data:{
            id:id,
            editar:'proveedor'
        },
        success:function(res){
            //console.log(res);
            if(res){
                let data=JSON.parse(res);
                console.log(data);
                $('#txt_id').val(data['id_prov']);
                $('#txt_categoria').val(data['id_cate']);
                $('#txt_rol').val(data['tipo_prov']);
                $('#txt_nombres').val(data['nom_prov']);
                $('#txt_precio').val(data['precio']);
            }
        }
    })
}


function actualizarProveedor(){
    let id=document.getElementById('txt_id').value;
    let cat=document.getElementById('txt_categoria').value;
    let rol=document.getElementById('txt_rol').value;
    let nombres=document.getElementById('txt_nombres').value;
    let precio=document.getElementById('txt_precio').value;

    $.ajax({
        url:'Proveedores/proveedor.php',
        type:'post',
        data:{
            id:id,
            categoria:cat,
            rol:rol,
            nombres:nombres,
            precio:precio,
            actualizar:'proveedor'
        },
        
        success:function(res){
            //console.log(res);
            if(res==1){
                //console.log('hecho');
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'Datos actualizados'
                });
                mostrarProveedores();

            }
        }
    })

}


function eliminarProveedor(id){
    Swal.fire({
        title: '¿Deseas eliminar este proveedor?',
        icon:'warning',
        confirmButtonText: 'Eliminar',
        showCancelButton: true,
        cancelButtonText: "Cancelar",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:'Proveedores/proveedor.php',
                type:'post',
                data:{
                    id:id,
                    eliminar:'proveedor'
                },
                success:function(res){
                    console.log(res);
                    if(res==1){
                        Swal.fire('Eliminado', 'Proveedor Eliminado', 'success');
                        mostrarProveedores();
                    }
                    
                }
            })
        }
    })
        
}     


function mostrarProveedores(){
    $.ajax({
        url:'Proveedores/mostrarProveedores.php',
        type:'post',
        success:function(res){
            if(res){

                try {
                    $('#tablaProveedores').find('tbody').html(res);

                } catch (error) {
                    console.log('Error: ', error.message);
                }
            }
        }
    })
}