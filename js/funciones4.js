$(document).ready(function() {
	
	$('#eliminar').click(function(event) {

	var id_personal = $("#id_per").val();

	if ($('#id_per').val()==""){
		$('#id_per').focus().after('<span class="error  ">Has olvidado tu id</span>');
			return false; 
	}else{
		$('#imag').removeClass('hide');	
		var dat = 'id_personal=' + id_personal ; 

		$.ajax({
                type: "POST",
                url: "php/eliminar_personal.php",
                data: dat,
                success: function() {
                    $('#imag').addClass('hide');
                    // $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300); 
                    
                    $('.msg').html("<p>Sea eliminado</p>").removeClass('hide').animate({ 'right' : '130px' }, 300).addClass('msg_ok');

                   // $('#mensaje').html("<br /><p>"+ dat +"</p>").removeClass('hide').addClass('msg_php_ok');
                    //alert(dat);

                },
                error: function() {
                    $('#imag').addClass('hide');
                    $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
                }
            });
            return false;
		}
		
	});

	$('#elimina_otro').click(function(event) {
		$('.msg').addClass('hide').animate({ 'right' : '-130px' }, 300);
		self.parent.location.reload();
	});


	$('#crear').click(function(event) {
		/*expresion regular para validar email*/
		var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

		var id_personal = $("#id_personal").val();
		var nombre = $("#nombre").val();
		var apellido1= $("#apellido1").val();
		var apellido2= $("#apellido2").val();
        var email = $("#email").val();
        var contra1= $("#contra1").val();
        var contra2= $("#contra2").val();
        var telefono= $("#telefono").val();
        var direccion= $("#direccion").val();
        var sele= $("#opcion").val();
         /*var valor = $("#miCombo").val();
    alert(valor);
    // Si seleccionamos la opci??n "Texto 1"
    // nos mostrar?? por pantalla "1"
    
     // As?? accedemos al Texto de la opci??n seleccionada
    var valor = $("#miCombo option:selected").html();*/
 	 
          
		 	
		$("#error").fadeOut().remove();

		if ($('#id_personal').val()==""){
			$('#id_personal').focus().after('<span class="error  ">Has olvidado tu id</span>');
			return false;  
			/*retorna falso, para evitar que se pase al otro campo */
		}else if ($('#nombre').val()==""){
			//mensaje si se se da el caso de que sea erronea la entrada
			$('#nombre').focus().after('<span class="error pull-right">olvidaste tu nombre</span>');
			/*retorna falso, para evitar que se pase al otro campo */
			return false;  
			/*validacion si es menor a 0*/
		}else if ($('#apellido1').val()==""){
			$('#apellido1').focus().after('<span class="error  ">olvidaste tu apellido paterno</span>');
			return false;  
			/*retorna falso, para evitar que se pase al otro campo */
		}else if ($('#apellido2').val()==""){
			$('#apellido2').focus().after('<span class="error  ">olvidaste tu apellido materno</span>');
			return false;  
			/*retorna falso, para evitar que se pase al otro campo */
		}else if($('#email').val() == ""){
			$('#email').focus().after('<span class="error p">Ingrese tu email </span>'); 
			return false;
		}else if (!emailreg.test($("#email").val())){
			$("#email").focus().after('<span class="error ">Ingrese un email correcto</span>'); 
			return false;
	/* fin validacion de email si esta vacio o no cumplle con la expresion regular*/
		}else if ($('#contra1').val() == ""){
			$('#contra1').focus().after('<span class="error ">Olvidaste tu contrase??a</span>');
			return false;  
			/*retorna falso, para evitar que se pase al otro campo */
		}else if ($('#contra2').val() != $('#contra1').val()){
			$('#contra2').focus().after('<span class="error ">No coinside contrase??a</span>');
			return false;  
			/*retorna falso, para evitar que se pase al otro campo */
		}else if($('#telefono').val().length < 10){
			$('#telefono').focus().after('<span class="error ">Deben ser 10 digitos</span>');
			return false;  
			/*retorna falso, para evitar que se pase al otro campo */
		}else if($('#telefono').val().length > 10){
			$('#telefono').focus().after('<span class="error ">Solo deben ser 10 digitos</span>');
			return false;  
			/*retorna falso, para evitar que se pase al otro campo */
		}else if($('#direccion').val()==""){
			$('#direccion').focus().after('<span class="error ">Ingresa tu direccion</span>');
			return false;  
			/*retorna falso, para evitar que se pase al otro campo */
		}else if($("select option:selected").val()=="") {  
            $('select').focus().after('<span class="error ">Selecciona un usuario</span>'); 
            return false;  
        }else{
        	/*	
        nombre
		apellido1
		apellido2
        email
        contra1
        contra2
        telefono
        direccion
        seleccion*/ 

        $('#imag').removeClass('hide');
        	
		var dat = 'id_personal=' + id_personal + '&nombre=' + nombre + '&apellido1=' + apellido1+ '&apellido2=' + apellido2 + '&email=' + email + '&contra1=' + contra1 + '&contra2=' + contra2 + '&telefono=' + telefono + '&direccion=' + direccion + '&sele=' + sele ;
        	
// var datos = 'nombre='+ nombre + '&apellido=' + apellido + '&email=' + email + '&contra=' + contra + '&fecha=' + fecha + '&seleccion=' + seleccion;
        	
 
        	//document.write('<p>datos: ' + dat + '</p>');

        	$.ajax({
                type: "POST",
                url: "php/actualizar_persona.php",
                data: dat,
                success: function() {
                    $('#imag').addClass('hide');
                    // $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300); 
                    
                    $('.msg').html("<p>Se a actualizado </p>").removeClass('hide').animate({ 'right' : '130px' }, 300).addClass('msg_ok');

                   // $('#mensaje').html("<br /><p>"+ dat +"</p>").removeClass('hide').addClass('msg_php_ok');
                    //alert(dat);

                },
                error: function() {
                    $('#imag').addClass('hide');
                    $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
                }
            });
            return false;
            
        }


         
   
		
	});

	$('#res').click(function(event) {
		$('.msg').addClass('hide').animate({ 'right' : '-130px' }, 300);
		//$('#imag').addClass('hide');
	});	
	/*para evitar que se envie varias veses el mismo formulario*/
	$('form').submit(function(){
		$(':submit').attr('disabled', 'disabled');
	})


	
/*eliminar mensajes*/
		
		/*caracteres que acepta las entradas de nombre y apellidos*/
		$('#nombre').validCampoFranz(' abcdefghijklmn??opqrstuvwxyz????iou');
		$('#apellido1').validCampoFranz(' abcdefghijklmn??opqrstuvwxyz????iou');
		$('#apellido2').validCampoFranz(' abcdefghijklmn??opqrstuvwxyz????iou');
		//Para escribir solo numeros    
        $('#telefono').validCampoFranz('0123456789'); 
        $('#id_personal').validCampoFranz('0123456789'); 
        $('#id_per').validCampoFranz('0123456789');    


        $('#id_personal').bind('blur keyup',function(){
			if($('#id').val() != ""){
				$('.error').fadeOut();
				return false; 
			}
		});

		$('#nombre').bind('blur keyup',function(){
			if($('#nombre').val() != ""){
				$('.error').fadeOut();
				return false; 
			}
		});

		
		$('#apellido1').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	

		$('#apellido2').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	


	
		$('#email').bind('blur keyup', function() {
			if ($("#email").val() != ""){	
				$('.error').fadeOut();  
				return false;  
			}else if(emailreg.test($("#email").val())){
				$('.error').fadeOut();  
				return false;  
			}
		});

		$('#contra1').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	

		$('#contra2').bind('blur keyup', function(){  
	        if ($('#contra2').val() == $("#contra1").val()){  	
				$('.error').fadeOut();
				return false;  
			}
		});

	
		$('#telefono').bind('blur keyup', function(){  
	        if ($(this).length <10){  			
				$('.error').fadeOut();
				return false;  
			}
		});

		$('#telefono').bind('blur keyup', function(){  
	        if ($(this).length >10){  			
				$('.error').fadeOut();
				return false;  
			}
		});

		$('#direccion').bind('blur keyup', function(){  
	         if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});

		$('select').bind('blur keyup', function(){  
	        if ($("select option:selected").val()!=""){  			
				$('.error').fadeOut();
				return false;  
			}
		});
			


		$('#id_per').bind('blur keyup',function(){
			if($('#id').val() != ""){
				$('.error').fadeOut();
				return false; 
			}
		});
		/*color de casillas de input's*/
   		$('input').focus(function(){
	   		 $(this).css("background-color","#E8E8E8");
	 	 });
		$('input').blur(function(){
	    	$(this).css("background-color","#ffffff");
	  	});


	  	$('#crear').hover(function() {
		 
		$(this).animate( { opacity: 0.3 }, 400);
		}, function() {
		
		$(this).animate( { opacity: 1.0 }, 400);
		});
		
	



















	 /*funciones y eventos de pesta??as captura las pesta??as de la pagina 8*/
	 $( "#pesta??as" ).tabs({
	     collapsible: true
	 });
	 /*captura evento de nuevo para refrescar la pagina*/
	 $('#res').click(function() {
            // Recargo la p??gina
           //location.reload()
           self.parent.location.reload();
     });
	 
});