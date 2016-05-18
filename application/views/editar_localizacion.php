<h1 class="text-center">Editar localizacion</h1>

<?php echo form_open('archivo/updateLocalizacion/'.$id, array('class' => 'form-horizontal')); ?>
  <div class="form-group <?php if(form_error('lt')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Lote: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $lt ?>" placeholder="Numero de recibo" name="lt">
      <div class="help-block">
        <p><?php echo form_error('lt'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('mz')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Manzana: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $mz ?>" placeholder="Cantidad" name="mz">
      <div class="help-block">
        <p><?php echo form_error('mz'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('sec')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Seccion: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $sec ?>" placeholder="Refeferendo" name="sec">
      <div class="help-block">
        <p><?php echo form_error('sec'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('fila')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Fila: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $fila ?>" placeholder="Refeferendo" name="fila">
      <div class="help-block">
        <p><?php echo form_error('fila'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('domicilio')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Domicilio: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $domicilio ?>" placeholder="Refeferendo" name="domicilio">
      <div class="help-block">
        <p><?php echo form_error('domicilio'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="Guardar cambios" class="turquoise-flat-button">
    </div>
  </div>
</form>