<h1 class="text-center">Editar difunto</h1>

<?php echo form_open('archivo/updateDifunto/'.$id, array('class' => 'form-horizontal')); ?>
  <div class="form-group <?php if(form_error('nombre_finado')) echo 'has-error' ?>">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombre: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nombre" value="<?php echo $nombre ?>" name="nombre_finado">
      <div class="help-block">
        <p><?php echo form_error('nombre_finado'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('fecha_archivo')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Fecha archivo: </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" value="<?php echo $fecha_archivo?>" name="fecha_archivo">
      <div class="help-block">
        <p><?php echo form_error('fecha_archivo'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('fecha_fallecimiento')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Fecha fallecimiento: </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" value="<?php echo $fecha_fallecimiento ?>" name="fecha_fallecimiento">
      <div class="help-block">
        <p><?php echo form_error('fecha_fallecimiento'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('nombre_familiar')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Nombre familiar: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $nombre_familiar ?>" placeholder="Nombre familiar" name="nombre_familiar">
      <div class="help-block">
        <p><?php echo form_error('nombre_familiar'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('observaciones')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Observaciones</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $observaciones ?>" placeholder="Observaciones" name="observaciones">
      <div class="help-block">
        <p><?php echo form_error('observaciones'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('peticiones')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Peticiones</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $peticiones ?>" placeholder="Peticiones" name="peticiones">
      <div class="help-block">
        <p><?php echo form_error('peticiones'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="turquoise-flat-button">Guardar cambios</button>
    </div>
  </div>
</form>