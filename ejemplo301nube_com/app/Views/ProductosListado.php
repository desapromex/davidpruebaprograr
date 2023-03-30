  <!-- Content -->  
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Productos</li>
      </ol>
      <!-- // END Breadcrumb -->

      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Productos Listado</h5>
        </div>
		
          <div class="card">
            <div class="card-block">
				<button type="button" id="btn_crear_agregar_nuevo" class="btn btn-primary btn-gradient">Agregar Crear Nuevo Producto</button>
            </div>
          </div>
		  
        <table id="datatable-example" class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>PrecioVenta</th>
              <th>Sucursal</th>
              <th>FechaCaducidad</th>
            </tr>
          </thead>
        </table>
        <div class="clearfix"></div>
      </div>

    </div>
  </div>
  <!-- Vendor JS -->
  <script src="<?php echo base_url('public/assets/vendor/jquery.dataTables.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/dataTables.bootstrap.js'); ?>"></script>
<script>
    (function ($) {

	$('#datatable-example').DataTable({
		"data": [
  <?php 
    for($i=0;$i < count($productos_result);$i++){
	   $rowsingle=$productos_result[$i];	   
	   echo '[';
		   echo '"' . str_ireplace('"','\"',$rowsingle['id']).'",';		   
		   echo '"' . str_ireplace('"','\"',$rowsingle['nombre']).'",';		   
		   echo '"' . str_replace('"','\"',$rowsingle['precioventa']).'",';		   
		   echo '"' . str_ireplace('"','\"',$rowsingle['sucursal']).'",';		   
		   echo '"' . str_ireplace('"','\"',$rowsingle['fechacaducidad']).'",';		   
	   echo ']';
	   if($i < count($productos_result)-1){
		   echo ',';
	   }
   }
  ?>
		]
	});
}(jQuery));
</script>
<script>
(function ($) {
	var base_url="<?php echo base_url('/'); ?>";
	$( "#btn_crear_agregar_nuevo").on("click", function() {
				window.location.href=base_url+"public/"+"ProductoEditor/agregar"					
	});
}(jQuery)); 
</script>
<link rel="stylesheet" href="<?php echo base_url('public/assets/vistas/ProductosListado/css/ProductosListado.css'); ?>" type="text/css">
<script src="<?php echo base_url('public/assets/vistas/ProductosListado/js/ProductosListado.js'); ?>"></script>
