<h1>Registro Paso 3  - Localizacion</h1>

<?php echo form_open('registro/addLocalizacion/'.$id); ?>
		<div class="form-group">
			<label for="exampleInputPassword1">Panteon</label>
			<select class="form-control" name="panteon">
			  <option>Panteon San blas</option>
			  <option>Panteon san pedro</option>
			</select>
		</div>

	  <div class="form-group <?php if(form_error('lt')) echo 'has-error' ?>">
	    <label for="exampleInputEmail1">Lote</label>
	    <input type="text" class="form-control"  name="lt" value="<?php echo set_value('lt'); ?>">
	    <div class="help-block">
		  <p><?php echo form_error('lt'); ?></p>
		</div>
	  </div>

	  <div class="form-group <?php if(form_error('mz')) echo 'has-error' ?>">
	    <label for="exampleInputPassword1">Manzana</label>
	    <input type="text" class="form-control"  name="mz" value="<?php echo set_value('mz'); ?>">
	    <div class="help-block">
		  <p><?php echo form_error('mz'); ?></p>
		</div>
	  </div>

	  <div class="form-group <?php if(form_error('sec')) echo 'has-error' ?>">
	    <label for="exampleInputPassword1">Seccion</label>
	    <input type="text" class="form-control"  name="sec" value="<?php echo set_value('sec'); ?>">
	    <div class="help-block">
		  <p><?php echo form_error('sec'); ?></p>
		</div>
	  </div>

	  <div class="form-group <?php if(form_error('fila')) echo 'has-error' ?>">
	    <label for="exampleInputPassword1">Fila</label>
	    <input type="text" class="form-control"  name="fila" value="<?php echo set_value('fila'); ?>">
	    <div class="help-block">
		  <p><?php echo form_error('fila'); ?></p>
		</div>
	  </div>

	  <div class="form-group <?php if(form_error('domicilio')) echo 'has-error' ?>">
	    <label for="exampleInputPassword1">Domiciio</label>
	    <input type="text" class="form-control"  name="domicilio" value="<?php echo set_value('domicilio'); ?>">
	    <div class="help-block">
		  <p><?php echo form_error('domicilio'); ?></p>
		</div>
	  </div>
<input type="submit" value="Continuar" class="turquoise-flat-button">