<h1 class="text-center">Editar difunto</h1>

<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombre: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nombre" value="<?php echo $nombre ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Fecha archivo: </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" value="<?php echo $fecha_archivo?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Fecha fallecimiento: </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" value="<?php echo $fecha_fallecimiento ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nombre familiar: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $nombre_familiar ?>" placeholder="Nombre familiar">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Observaciones</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $observaciones ?>" placeholder="Observaciones">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Peticiones</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $peticiones ?>" placeholder="Peticiones">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="turquoise-flat-button">Guardar cambios</button>
    </div>
  </div>
</form>