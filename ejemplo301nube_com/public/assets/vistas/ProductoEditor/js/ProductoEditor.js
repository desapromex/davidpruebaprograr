(function ($) {
	$('.datepicker').datepicker({
    /*format: 'mm/dd/yyyy'*/
    format: 'yyyy/mm/dd'
	});

	$( "#btn_guardar").on("click", function() {
		var banderacontinuar=true;		
		if(!$("#id").val()){
			banderacontinuar=false;
		}
		if(!$("#nombre").val()){
			banderacontinuar=false;
		}
		if(!$("#precioventa").val()){
			banderacontinuar=false;
		}
		if(!$("#sucursal").val()){
			banderacontinuar=false;
		}
		if(!$("#fechacaducidad").val()){
			banderacontinuar=false;
		}
		if(!banderacontinuar){
			alert('Necesario Llenar todos los Datos')
			$('.simplebar-scroll-content').animate({
			scrollTop: $("#id").offset().top
			}, 1000);
			return false
		}
		var base_url_path_vector=base_url_path.split("/");		
		var peticionurlmetodo=""
		if("agregar"==base_url_path_vector[base_url_path_vector.length-1].trim().toLowerCase()){
			peticionurlmetodo="insertartupla"
		}
		if("modificar"==base_url_path_vector[base_url_path_vector.length-1].trim().toLowerCase()){
			peticionurlmetodo="modificartupla"
		}
		var frdata= new FormData();
		frdata.append('id', $("#id").val());
		frdata.append('nombre', $("#nombre").val());
		frdata.append('precioventa', $("#precioventa").val());		
		frdata.append('sucursal', $("#sucursal").val());
		frdata.append('fechacaducidad', $("#fechacaducidad").val());
		jQuery.ajax({
			url: base_url+"public/"+"ProductoBaseDatosCRUD/"+peticionurlmetodo,
			data: frdata,
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST', // For jQuery < 1.9
			success: function(data){				
				window.location.href=base_url+"public/"+"productos/"
			},
			error:function(XMLHttpRequest, textStatus, errorThrown){
				alert("Status: " + textStatus);
				alert("Error: " + errorThrown); 
			}
		});		
	});
}(jQuery));