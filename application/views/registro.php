
      <h1>Registro Paso 1 - Difunto</h1>

      
      <?php echo form_open('registro/addDifunto'); ?>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Fecha archivo</label>
		    <input type="date" class="form-control" name="fecha_archivo">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Fecha fallecimiento</label>
		    <input type="date" class="form-control" name="fecha_fallecimiento">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Nombre difunto</label>
		    <input type="text" class="form-control" name="nombre_finado">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Nombre familiar</label>
		    <input type="text" class="form-control" name="nombre_familiar">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Observaciones</label>
		    <input type="text" class="form-control" name="observaciones">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Peticiones</label>
		    <input type="text" class="form-control" name="peticiones">
		  </div>
		  
		  <input type="submit" value="Continuar" class="turquoise-flat-button">
