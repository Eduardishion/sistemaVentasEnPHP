/*Jquery de segundo formulario*/

$(document).ready(function() {
	//Para escribir solo letras
	//
	//
	
/*	99999.22
	99799.22
	96999.22
	35999.22*/
	$('#guardar').click(function(event) {

		var codigo = $("#codigo").val();
		var nombre = $("#nombre").val();
		var clase = $("#clase").val();
		var marca = $("#marca").val();
		var precio = $("#precio").val();
		var registro = $("#registro").val();
		var caducidad = $("#caducidad").val();
		var descripcion = $("#descripcion").val();  

		//exprecion regular para numeros fraccionarios como lo siguientes ejemplos     

		//var ValidationExpression="^[0-9]{1,5}(\.[0-9]{0,2})?$"; 
		
		if($('#codigo').val()==""){
			$('#codigo').focus().after('<span class="error ">Ingresa el codigo de producto</span>');
			return false;  
		}else if ($('#codigo').val().length > 10) {
			$('#codigo').focus().after('<span class="error ">Sobre pasaste la cantidad de digitos permitidos</span>');
			return false; 
		}else if ($('#nombre').val()=="") {
			$('#nombre').focus().after('<span class="error ">Olvidaste el nombre</span>');
			return false; 
		}else if ($('#clase').val()==""){
			$('#clase').focus().after('<span class="error ">Ingresa la clase del producto</span>');
			return false;  
		}else if ($('#marca').val()==""){
			$('#marca').focus().after('<span class="error ">Ingresa la marca</span>');
			return false;  
		}else if ($('#precio').val()==""){
			$('#precio').focus().after('<span class="error ">Ingresa su precio</span>');
			return false;  
		}else if ($('#registro').val()==""){
			$('#registro').focus().after('<span class="error ">Selecciona la fecha  de registro</span>');
			return false;  
		}else if ($('#caducidad').val()==""){
			$('#caducidad').focus().after('<span class="error ">Cual es la fecha de caducidad</span>');
			return false;  
		}else if ($('#descripcion').val()==""){
			$('#descripcion').focus().after('<span class="error ">Escribe un breve descricion </span>');
			return false;  
		}else{

        	$('#imag').removeClass('hide');
        	
        	var dat = 'codigo=' + codigo + '&nombre=' + nombre + '&clase=' + clase + '&marca=' + marca + '&precio=' + precio + '&registro=' + registro + '&caducidad=' + caducidad + '&descripcion=' + descripcion ;
 
 		
        	
        	//document.write('<p>datos: ' + dat + '</p>');

        	$.ajax({
                type: "POST",
                url: "php/cargar.php",
                data: dat,
                success: function() {
                    $('#imag').addClass('hide');
                    // $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300); 
                    
                    $('.msg').html("<p>El producto a sido capturado  </p>").removeClass('hide').animate({ 'right' : '130px' }, 300).addClass('msg_ok');
					
                    $('#mensaje').html("<p>"+"DATOS QUE SE ENVIARON:"+ codigo + "," + nombre + "," + clase + "," + marca + "," + precio + "," + registro + "," + caducidad + "," + descripcion + "</p>").removeClass('hide').addClass('msg_php_ok');

                    /*$('#mensaje').html("<br /><p>"+ dat +"</p>").removeClass('hide').addClass('msg_php_ok');*/

                  /*  alert("estos son los datos:" + dat);*/


                },
                error: function() {
                    $('#imag').addClass('hide');
                    $('.msg').text('Hubo un error el cargar el dato!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
                }
            });
            return false;
            
        }

	});


		/*para evitar que se envie varias veses el mismo formulario*/
		$('form').submit(function(){
			$(':submit').attr('disabled', 'disabled');
		})


		$('#nuevo').click(function(event) {
			$('.msg').addClass('hide').animate({ 'right' : '-130px' }, 300);
			$('#mensaje').addClass('hide').animate({ 'right' : '-10px' }, 300);
		//$('#imag').addClass('hide');
		});	

		$('#codigo').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}else if ($('#codigo').val().length < 10) {
				$('.error').fadeOut();
			return false;
		   }
		});	

		$('#nombre').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	
		$('#clase').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	

		$('#marca').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	

		$('#precio').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	

		$('#registro').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	

		$('#caducidad').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	

		$('#descripcion').bind('blur keyup', function(){  
	        if ($(this).val() != "") {  			
				$('.error').fadeOut();
				return false;  
			}
		});	
				
				$('#nombre').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

                $('#clase').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
                $('#marca').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

                //Para escribir solo numeros    
                $('#codigo').validCampoFranz('0123456789');  

                //Para escribir solo numeros    
                //$('#precio').validCampoFranz('0123456789,0123456789');   

                $('#precio').validCampoFranz('0123456789.0123456789');


                $('input').focus(function(){
			   	$(this).css("background-color","#E8E8E8");			 	 });
				$('input').blur(function(){
			   	$(this).css("background-color","#ffffff");
			  	});


});

