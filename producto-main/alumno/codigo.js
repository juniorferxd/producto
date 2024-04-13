$('#formLogin').submit(function(e){
   e.preventDefault();
   var email = $.trim($("#email").val());    
   var name=$.trim($("#name").val());    
    
   if(email.length == "" || name == ""){
      Swal.fire({
          type:'warning',

          title:'Debe ingresar un Correo y/o Contraseña: Acceso denegado a CEPUNS',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/login.php",
           type:"POST",
           datatype: "json",
           data: {email:email, name:name}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'alert',
                       confirmButtonColor:'#910918',
                       title:'Correo y/0 Contraseña Incorrecta.<br> Intente nuevamente.<br>Gracias.',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡ Conexión exitosa !<BR> Bienvenido a <BR>CEPUNS',
                       confirmButtonColor:'#910918',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           window.location.href = "vistas/escritorio.php";
                         
                       }
                   })
                   
               }
           }    
        });
    }     
});