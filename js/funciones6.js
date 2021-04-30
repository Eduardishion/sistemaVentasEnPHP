var inicio=function() {
	$('.cantidad').keyup(function(e) {
		/* Act on the event */
		if ($(this).val()!= ""){
			if (e.keyCode == 13){

				var id_producto=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();

				$(this).parentsUntil('.producto').find('.subtotal').text('Subtotal: '+(precio*cantidad));
				$.post('../carrito/modificarDatos.php',{
					Id_producto:id_producto,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
						$("#total").text('Total: '+ e);
				});
				//self.parent.location.reload();
			}	
		}
	}); 

	$(".eliminar").click(function(a){
		a.preventDefault();//previena la recarga de la pagina
		var id_producto=$(this).attr('data-id');
		//alert(id_producto);
		//para eliminarlo de la vista de html
		$(this).parentsUntil('.producto').remove();
		//para removerlo del arreglo php
		//$.post('../php/carrito/eliminar.php',{
		$.post('../carrito/eliminar.php',{
			Id:id_producto
		},function(a){
			
			if(a=='0'){
				alert("Sin productos");
				location.href="./carrito.php";
			}
		});

	});

	
}	
$(document).on('ready',inicio);

