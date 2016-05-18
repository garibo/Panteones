<h1 class="text-center">Apartar localizacion</h1>

<?php echo form_open('terreno/addTerreno/', array('class' => 'form-horizontal')); ?>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Panteon: </label>
    <div class="col-sm-10">
      <select class="form-control" name="panteon">
        <option>Panteon San blas</option>
        <option>Panteon san pedro</option>
      </select>
    </div>
  </div>

  <div class="form-group <?php if(form_error('nombre_apartante')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Nombre apartante: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Nombre" name="nombre_apartante">
      <div class="help-block">
        <p><?php echo form_error('nombre_apartante'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('lt')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Lote: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Lote" name="lt">
      <div class="help-block">
        <p><?php echo form_error('lt'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('mz')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Manzana: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Manzana" name="mz">
      <div class="help-block">
        <p><?php echo form_error('mz'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('sec')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Seccion: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Seccion" name="sec">
      <div class="help-block">
        <p><?php echo form_error('sec'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('fila')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Fila: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Fila" name="fila">
      <div class="help-block">
        <p><?php echo form_error('fila'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group <?php if(form_error('domicilio')) echo 'has-error' ?>">
    <label for="inputPassword3" class="col-sm-2 control-label">Domicilio: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Domicilio" name="domicilio">
      <div class="help-block">
        <p><?php echo form_error('domicilio'); ?></p>
      </div>
    </div>
  </div>

  <div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label"> </label>
   <div class="checkbox col-sm-10">
      <label>
        <input type="checkbox" name="estado"> En aparte
      </label>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="Guardar cambios" class="turquoise-flat-button">
    </div>
  </div>


</form>