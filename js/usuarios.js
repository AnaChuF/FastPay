/*$(document).ready(function(){
    $('#alerta').hide();

    $('#btn_registrar').on('click',function(e){
        e.preventDefault();
        registrarUsuarios();
    })
})

$('#clave2').keyup(function(){
    claves();
})

function claves(){
    let pass=document.getElementById('clave').value;
    let pass2=document.getElementById('clave2').value;
    if(pass=='' || pass2==''){
        $('#alerta').hide();
    }else{
        if(pass!=pass2){
            $('#btn_registrar').prop('disabled', true);
            //$('#alerta').append('texto');
            $('#alerta').show();
        }else{
            $('#alerta').hide();
            $('#btn_registrar').prop('disabled', false);
        }
    }
    
    
        
}

function registrarUsuarios(){
    let datos=$('#registrar').serialize();
    $.ajax({
        type:"post",
        url: "usuario/UsuarioInsertar.php",
        data: datos,
        success:function(res){
            console.log(res);
            if(res!=""){
                console.log(res);
                let dat=JSON.parse(res);
                console.log(dat);

                if (dat==true) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Exito',
                        text: 'Usuario registrado con éxito'
                    });
                    location.href="index.php";
                    //Arreglar(casi no muestra la alerta)
                } else {
                    console.log(dat);
                    
                }
            }else{
                Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                })
            }
            
        }

    })
}*/

function actualizarDatos(){
    let id=document.getElementById('id').value;
    let nombres=document.getElementById('nombres').value;
    let usuario=document.getElementById('nombreUsuario').value;
    let telefono=document.getElementById('telefono').value;
    let email=document.getElementById('email').value;
    let pass=document.getElementById('clave').value;

    $.ajax({
        url:'usuario/actualizarDatos.php',
        type:'post',
        data:{
            id:id,
            nombres,
            usuario:usuario,
            telefono:telefono,
            email:email,
            clave:pass
        },
        success:function(res){
            console.log(res);
            if(res){
                Swal.fire({
                    icon:'success',
                    title:'Éxito',
                    text:'Datos Actualizados'
                })
            }
        }
    })

}