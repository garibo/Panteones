<ol class="breadcrumb">
    <li ><a href="<?= base_url('registro/') ?>">Difunto</a></li>
    <li><a href="<?= base_url('registro/pagos') ?>">Pagos y permisos</a></li>
    <li><a href="<?= base_url('registro/localizacion') ?>">Localizacion</a></li>
  </ol>



<h1>Registro Paso 3  - Localizacion</h1>

<?php echo form_open('registro/addLocalizacion/'.$id); ?>
		<div class="form-group">
			<label for="exampleInputPassword1">Panteon</label>
			<select class="form-control" name="panteon">
			  <option>Panteon San blas</option>
			  <option>Panteon san pedro</option>
			</select>
		</div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Lote</label>
	    <input type="text" class="form-control"  name="lt" >
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Manzana</label>
	    <input type="text" class="form-control"  name="mz" >
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Seccion</label>
	    <input type="text" class="form-control"  name="sec" >
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Fila</label>
	    <input type="text" class="form-control"  name="fila" >
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Domiciio</label>
	    <input type="text" class="form-control"  name="domicilio" >
	  </div>
<input type="submit" value="Continuar" class="turquoise-flat-button">