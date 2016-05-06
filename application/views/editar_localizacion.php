<h1 class="text-center">Editar localizacion</h1>

<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Panteon: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $panteon ?>" >
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Lote: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $lt ?>" placeholder="Numero de recibo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Manzana: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $mz ?>" placeholder="Cantidad">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Seccion: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $sec ?>" placeholder="Refeferendo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Fila: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $fila ?>" placeholder="Refeferendo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Domicilio: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $domicilio ?>" placeholder="Refeferendo">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="Guardar cambios" class="turquoise-flat-button">
    </div>
  </div>
</form>