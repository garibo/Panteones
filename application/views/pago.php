<h1>Registro Paso 2 - Permisos y pagos</h1>

<?php echo form_open('registro/addPago/'.$id); ?>
	  <div class="form-group <?php if(form_error('fecha_pago')) echo 'has-error' ?>">
	    <label for="exampleInputEmail1">Fecha de pago</label>
	    <input type="date" class="form-control" name="fecha_pago" value="<?php echo set_value('fecha_pago'); ?>">
	    <div class="help-block">
		  <p><?php echo form_error('fecha_pago'); ?></p>
		</div>
	  </div>

	  <div class="form-group <?php if(form_error('nrecibo')) echo 'has-error' ?>">
	    <label for="exampleInputPassword1">Numero de recibo</label>
	    <input type="text" class="form-control" name="nrecibo" value="<?php echo set_value('nrecibo'); ?>">
	    <div class="help-block">
		  <p><?php echo form_error('nrecibo'); ?></p>
		</div>
	  </div>

	  <div class="form-group <?php if(form_error('cantidad')) echo 'has-error' ?>">
	    <label for="exampleInputPassword1">Cantidad</label>
	    <input type="text" class="form-control" name="cantidad" value="<?php echo set_value('cantidad'); ?>">
	    <div class="help-block">
		  <p><?php echo form_error('cantidad'); ?></p>
		</div>
	  </div>

	  <div class="form-group <?php if(form_error('referendo')) echo 'has-error' ?>">
	    <label for="exampleInputPassword1">Referendo año</label>
	    <input type="text" class="form-control" name="referendo" value="<?php echo set_value('referendo'); ?>">
	    <div class="help-block">
		  <p><?php echo form_error('referendo'); ?></p>
		</div>
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