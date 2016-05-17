
      <h1>Registro Paso 1 - Difunto</h1>

      
      <?php echo form_open('registro/addDifunto'); ?>
		  <div class="form-group <?php if(form_error('fecha_archivo')) echo 'has-error' ?>">
		    <label for="exampleInputEmail1">Fecha archivo</label>
		    <input type="date" class="form-control" name="fecha_archivo" value="<?php echo set_value('fecha_archivo'); ?>">
		    <div class="help-block">
			  <p><?php echo form_error('fecha_archivo'); ?></p>
			</div>
		  </div>

		  <div class="form-group <?php if(form_error('fecha_fallecimiento')) echo 'has-error' ?>">
		    <label for="exampleInputPassword1">Fecha fallecimiento</label>
		    <input type="date" class="form-control" name="fecha_fallecimiento" value="<?php echo set_value('fecha_fallecimiento'); ?>">
		    <div class="help-block">
			  <p><?php echo form_error('fecha_fallecimiento'); ?></p>
			</div>
		  </div>

		  <div class="form-group <?php if(form_error('nombre_finado')) echo 'has-error' ?>">
		    <label for="exampleInputPassword1">Nombre difunto</label>
		    <input type="text" class="form-control" name="nombre_finado" id="nombre_finado" value="<?php echo set_value('nombre_finado'); ?>">
		    <div class="help-block">
			  <p><?php echo form_error('nombre_finado'); ?></p>
			</div>
		  </div>

		  <div class="form-group">
			<label for="exampleInputPassword1">Genero</label>
			<select class="form-control" name="genero">
			  <option>Masculino</option>
			  <option>Femenino</option>
			</select>
		 </div>

		  <div class="form-group <?php if(form_error('nombre_familiar')) echo 'has-error' ?>">
		    <label for="exampleInputPassword1">Nombre familiar</label>
		    <input type="text" class="form-control" name="nombre_familiar" value="<?php echo set_value('nombre_familiar'); ?>">
		    <div class="help-block">
			  <p><?php echo form_error('nombre_familiar'); ?></p>
			</div>
		  </div>

		  <div class="form-group <?php if(form_error('observaciones')) echo 'has-error' ?>">
		    <label for="exampleInputPassword1">Observaciones</label>
		    <input type="text" class="form-control" name="observaciones" value="<?php echo set_value('observaciones'); ?>">
		    <div class="help-block">
			  <p><?php echo form_error('observaciones'); ?></p>
			</div>
		  </div>

		  <div class="form-group <?php if(form_error('peticiones')) echo 'has-error' ?>">
		    <label for="exampleInputPassword1">Peticiones</label>
		    <input type="text" class="form-control" name="peticiones" value="<?php echo set_value('peticiones'); ?>">
		    <div class="help-block">
			  <p><?php echo form_error('peticiones'); ?></p>
			</div>
		  </div>
		  
		  <input type="submit" value="Continuar" class="turquoise-flat-button">
