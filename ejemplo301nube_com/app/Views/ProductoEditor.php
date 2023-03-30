  <!-- Content -->  
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Tables</li>
      </ol>
      <!-- // END Breadcrumb -->

	<div class="row">
		<div class="col-md-6">
		
          <div class="card">
            <div class="card-block">

				<div class="form-group">
					<label for="">id</label>
                    <input type="text" class="form-control" id="id" placeholder="" required>
				</div>
				 
				<div class="form-group">
				<label for="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="">
				</div>
				 
				<div class="form-group">
					<label for="">Precio Venta</label>
                    <input type="number" class="form-control" id="precioventa" placeholder="">
				</div>
				 
				<div class="form-group">
				  <label for="exampleSelect1">Sucursal Oficina</label>
				  <select class="form-control" id="sucursal">
					<option value="1">Sucursal 1</option>
					<option value="2">Sucursal 2</option>
					<option value="3">Sucursal 3</option>
					<option value="4">Sucursal 4</option>
					<option value="5">Sucursal 5</option>
				  </select>
				</div>
				 
            </div>
          </div>
		  
          <div class="card">
            <div class="card-block">
              <h5>Fecha Caducidad</h5>
              <div class="form-group">
                <input class="datepicker form-control" type="text" value="" id="fechacaducidad"/>
              </div>
            </div>
          </div>
		  
          <div class="card">
            <div class="card-block">
             
          <button type="button" id="btn_guardar" class="btn btn-primary btn-gradient">Guardar</button>
            </div>
          </div>
		  
		</div>
	</div>
    
    </div>
  </div>

<!-- Vendor JS -->
<script src="<?php echo base_url('public/assets/vendor/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('public/assets/vendor/dataTables.bootstrap.js'); ?>"></script>

<!-- Datepicker -->
<link rel="stylesheet" href="<?php echo base_url('public/assets/css/bootstrap-datepicker.min.css'); ?>">

<script src="<?php echo base_url('public/assets/vendor/bootstrap-datepicker.min.js'); ?>"></script>

<script>
var base_url="<?php echo base_url('/'); ?>";
var base_url_path="<?php $currentURL = current_url(); echo parse_url($currentURL, PHP_URL_PATH);?>";
</script>
<link rel="stylesheet" href="<?php echo base_url('public/assets/vistas/ProductoEditor/css/ProductoEditor.css'); ?>" type="text/css">
<script src="<?php echo base_url('public/assets/vistas/ProductoEditor/js/ProductoEditor.js'); ?>"></script>
