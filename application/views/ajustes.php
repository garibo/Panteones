<h1>Cambiar contraseña</h1>

<?php echo form_open('ajustes/change', array('class' => 'form-horizontal')); ?>
  
  <div class="form-group <?php if(form_error('correo')) echo 'has-error' ?>">
    <label for="inputEmail3" class="col-sm-2 control-label">Email: </label>
    <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="Email"  name="correo">
      <div class="help-block">
        <p><?php echo form_error('correo'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('contra')) echo 'has-error' ?>">
    <label for="inputEmail3" class="col-sm-2 control-label">Contraseña: </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="Nueva contraseña"  name="contra">
      <div class="help-block">
        <p><?php echo form_error('contra'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('nueva')) echo 'has-error' ?>">
    <label for="inputEmail3" class="col-sm-2 control-label">Nueva contraseña: </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="Repetir contraseña"  name="nueva">
      <div class="help-block">
        <p><?php echo form_error('nueva'); ?></p>
      </div>
    </div>
  </div>

    <div class="form-group <?php if(form_error('nueva_2')) echo 'has-error' ?>">
    <label for="inputEmail3" class="col-sm-2 control-label">Repetir contraseña: </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="Repetir contraseña"  name="nueva_2">
      <div class="help-block">
        <p><?php echo form_error('nueva_2'); ?></p>
      </div>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="turquoise-flat-button">Guardar cambios</button>
    </div>
  </div>
</form>