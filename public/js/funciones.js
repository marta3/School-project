
$(document).ready(function() {

	// DATOS MODAL FORMACION

    $('.modalModificar').click(function() {
        var id = $(this).data('id');
        var titulo=$('#titulo_usu' + id).text();
        var grado=$('#grado_usu'+ id).text();
        var centro=$('#centro_usu'+ id).text();
        var finalizado=$('#finalizado_usu'+ id).text();
        var anyo_finalizacion=$('#anyo_finalizacion_usu'+ id).text();
        $(".modal-body #id_usu").val( id );
		$(".modal-body #titulo").val( titulo );
		$(".modal-body #grado").val( grado );
		$(".modal-body #centro").val( centro );
        if(finalizado=="Si"){
            $("#fin").prop('checked', true);
            
        }
        else{
            $("#fin").prop('checked', false);
           
        }
		
		$(".modal-body #anyo_finalizacion").val( anyo_finalizacion );

    });

    $('.modalInsertarFormacion').click(function() {
		$(".modal-body #titulo").val( '' );
		$(".modal-body #grado").val( '' );
		$(".modal-body #centro").val( '' );
		$(".modal-body #finalizado").val( '' );
		$(".modal-body #anyo_finalizacion").val( '' );
	});


        // DATOS MODAL EXPERIENCIA

    $('.modalModifExperiencia').click(function() {
        var id = $(this).data('id');
        var puesto=$('#puesto_usu'+ id).text();
        var funcion_realizada=$('#funcion_realizada_usu'+ id).text();
        var empresa=$('#empresa_usu'+ id).text();
        var sector_empresa=$('#sector_empresa_usu'+ id).text();
        var mes_anyo_inicio=$('#mes_anyo_inicio_usu'+ id).text();
        var mes_anyo_fin=$('#mes_anyo_fin_usu'+ id).text();
        $(".modal-body #id_usu").val( id );
		$(".modal-body #puesto").val( puesto );
		$(".modal-body #funcion_realizada").val( funcion_realizada );
		$(".modal-body #empresa").val( empresa );
		$(".modal-body #sector_empresa").val( sector_empresa );
		$(".modal-body #mes_anyo_inicio").val( mes_anyo_inicio );
		$(".modal-body #mes_anyo_fin").val( mes_anyo_fin );

    });


    $('.modalInsertarExperiencia').click(function() {
		$(".modal-body #puesto").val( '' );
		$(".modal-body #funcion_realizada").val( '' );
		$(".modal-body #empresa").val( '' );
		$(".modal-body #sector_empresa").val( '' );
		$(".modal-body #mes_anyo_inicio").val( '' );
		$(".modal-body #mes_anyo_fin").val( '' );
	}); 

	        // DATOS MODAL IDIOMA

    $('.modalModiIdioma').click(function() {
        var id = $(this).data('id');
        var idioma=$('#idioma_usu'+ id).text();
        var nivel_hablado=$('#nivel_hablado_usu'+ id).text();
        var nivel_escrito=$('#nivel_escrito_usu'+ id).text();
        var titulo_oficial=$('#titulo_oficial_usu'+ id).text();
        $(".modal-body #id_usu").val( id );
		$(".modal-body #idioma").val( idioma ); 
		$(".modal-body #nivel_hablado").val( nivel_hablado );
		$(".modal-body #nivel_escrito").val( nivel_escrito );
		$(".modal-body #titulo_oficial").val( titulo_oficial );

    });


    $('.modalInsertarIdioma').click(function() {
		$(".modal-body #idioma").val('' );
		$(".modal-body #nivel_hablado").val( '' );
		$(".modal-body #nivel_escrito").val( '' );
		$(".modal-body #titulo_oficial").val( '' );
});


    $('.modalInsertarOferta').click(function() {
    $(".modal-body #titulo").val( '' );
    $(".modal-body #descripcion").val( '' );
    $(".modal-body #empresa").val( '' );
    $(".modal-body #sector").val( '' );
    $(".modal-body #fecha_limite").val( '' );
  });

      // DATOS MODAL OFERTAS

    $('.modalModificarOferta').click(function() {
        var id = $(this).data('id');
        var titulo=$('#titulo_ofe' + id).text();
        var descripcion=$('#descripcion_ofe'+ id).text();
        var empresa=$('#empresa_ofe'+ id).text();
        var sector=$('#sector_ofe'+ id).text();
        var fecha_limite=$('#fecha_limite_ofe'+ id).text();
        $(".modal-body #id_oferta").val( id );
    $(".modal-body #titulo").val( titulo );
    $(".modal-body #descripcion").val( descripcion );
    $(".modal-body #empresa").val( empresa );
    $(".modal-body #sector").val( sector );
    $(".modal-body #fecha_limite").val( fecha_limite );
    });

    $('.modalInsertarOferta').click(function() {
    $(".modal-body #titulo").val( '' );
    $(".modal-body #descripcion").val( '' );
    $(".modal-body #empresa").val( '' );
    $(".modal-body #sector").val( '' );
    $(".modal-body #fecha_limite").val( '' );
    
  });

});

function borrarCV($id) {
   swal({   
    title: "Quieres borrar tu Curriculum Vitae?",
    text: "Una vez borrado no podrá ser recuperado",         type: "warning",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Sí, quiero borrarlo", 
    cancelButtonText:"Cancelar",
    closeOnConfirm: false 
  },
  function(isConfirm){
  	if (isConfirm){
  	location.href ="CV/delete/"+$id;
  }
  else{

  }
  }
  );
}

function formulario($id){

    document.getElementById($id).disabled=true;
    $('#'+$id).text('Enviando...');
}