<h1 class="text-center">Editar pagos y permisos</h1>

<?php echo form_open('archivo/updatePago/'.$id, array('class' => 'form-horizontal')); ?>
  <div class="form-group <?php if(form_error('fecha_pago')) echo 'has-error' ?>">
    <label for="inputEmail3" class="col-sm-2 control-label">Fecha de pago: </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" value="<?php echo $fecha_pago ?>" name="fecha_pago">
      <div class="help-block">
        <p><?php echo form_error('fecha_pago'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('nrecibo')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Numero de recibo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $nrecibo ?>" placeholder="Numero de recibo" name="nrecibo">
      <div class="help-block">
        <p><?php echo form_error('nrecibo'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('cantidad')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">cantidad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $cantidad ?>" placeholder="Cantidad" name="cantidad">
      <div class="help-block">
        <p><?php echo form_error('cantidad'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('referendo')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Referndo año</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $referendo ?>" placeholder="Refeferendo" name="referendo">
      <div class="help-block">
        <p><?php echo form_error('referendo'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

      <div class="checkbox">
        <label>
          <input type="checkbox" name="perp" <?php echo $perp ?>> Perpetuidad con descuento
        </label>
      </div>

      <div class="checkbox">
      <label>
        <input type="checkbox" name=" exh" <?php echo $exh ?>> Exahustividad
      </label>
    </div>


<div class="checkbox">
      <label>
        <input type="checkbox" name="pert" <?php echo $pert ?>> Perpetuidad
      </label>
    </div>

<div class="checkbox">
      <label>
        <input type="checkbox" name="const" <?php echo $const ?>> Constancia
      </label>
    </div>


<div class="checkbox">
      <label>
        <input type="checkbox" name="cond" <?php echo $cond ?>> Condonacion
      </label>
    </div>


    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="Guardar cambios" class="turquoise-flat-button">
    </div>
  </div>
</form>