$(document).ready(function(){
    $('#proveedor').hide();
    $('#nombre').hide();
    $('#apellido').hide();
    $('#otcat').hide();

    $("#categoria").change(function(){
        let ot=document.getElementById('categoria').value;
        console.log(ot);

        if(ot=='otros'){
            $('#otcat').show();

        }else{
            $('#otcat').hide();
            
        }
    })

    $("#rol").change(function(){
        let tipo=document.getElementById('rol').value;
        console.log(tipo);

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
    })
})