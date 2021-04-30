$(document).ready(function() {

  $().ajaxStart(function() {
        
        $('#loading').show();
        $('#resultado1').hide();

  
}).ajaxStop(function() {

        $('#loading').hide();
        $('#resultado1').fadeIn('slow');

});


$('#form1').submit(function(event) {
  /* Act on the event */
  $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#resultado1').html(data);

            }
        })
        
        return false;
});



/*seccion de arrastrable*/
	$( "#catalogo" ).accordion();
    $( "#catalogo li" ).draggable({
      appendTo: "body",
      helper: "clone"
    });
    $( "#lista ol" ).droppable({
      activeClass: "ui-state-default",
      hoverClass: "ui-state-hover",
      accept: ":not(.ui-sortable-helper)",
      drop: function( event, ui ) {
        $( this ).find( ".placeholder" ).remove();
        $( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
      }
    }).sortable({
      items: "li:not(.placeholder)",
      sort: function() {
        // gets added unintentionally by droppable interacting with sortable
        // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
        $( this ).removeClass( "ui-state-default" );
      }
    });
/*seccion de arrastrable*/

/*seccion de autocompletar*/

/*seccion de autocompletar*/


	
});