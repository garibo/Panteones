<ol class="breadcrumb">
    <li ><a href="<?= base_url('registro/') ?>">Difunto</a></li>
    <li><a href="<?= base_url('registro/pagos') ?>">Pagos y permisos</a></li>
    <li><a href="<?= base_url('registro/localizacion') ?>">Localizacion</a></li>
  </ol>



<h1>Registro Paso 2 - Permisos y pagos</h1>

<?php echo form_open('registro/addPago/'.$id); ?>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Fecha de pago</label>
	    <input type="date" class="form-control" name="fecha_pago" >
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Numero de recibo</label>
	    <input type="text" class="form-control" name="nrecibo" >
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Cantidad</label>
	    <input type="text" class="form-control" name="cantidad" >
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Referendo año</label>
	    <input type="text" class="form-control" name="referendo" >
	  </div>

	  <div class="checkbox">
	    <label>
	      <input type="checkbox" name="perp"> Perpetuidad con descuento
	    </label>
	  </div>

	  <div class="checkbox">
	    <label>
	      <input type="checkbox" name="exh"> exhaustividad
	    </label>
	  </div>

	  <div class="checkbox">
	    <label>
	      <input type="checkbox" name="pert"> Perpetuidad
	    </label>
	  </div>

	  <div class="checkbox">
	    <label>
	      <input type="checkbox" name="const"> Constancia
	    </label>
	  </div>

	  <div class="checkbox">
	    <label>
	      <input type="checkbox" name="cond"> Condonacion
	    </label>
	  </div>

	  

<input type="submit" value="Continuar" class="turquoise-flat-button">