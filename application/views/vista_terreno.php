<div id="titulo" >
<h1 id="nombre"><?php echo $nombre_apartante; ?> </h1>	
</div>


<div class="row">
  <div class="col-md-3"><p class="text-right"><strong>Lote:</strong></p> </div>
  <div class="col-md-9"><?php echo $lt; ?> </div>
</div>

<div class="row">
  <div class="col-md-3"><p class="text-right"><strong>Manzana:</strong></p> </div>
  <div class="col-md-9"><?php echo $mz; ?> </div>
</div>

<div class="row">
  <div class="col-md-3"><p class="text-right"><strong>Seccion:</strong></p> </div>
  <div class="col-md-9"><?php echo $sec; ?> </div>
</div>

<div class="row">
  <div class="col-md-3"><p class="text-right"><strong>Fila:</strong></p> </div>
  <div class="col-md-9"><?php echo $fila; ?> </div>
</div>

<div class="row">
  <div class="col-md-3"><p class="text-right"><strong>Panteon:</strong></p> </div>
  <div class="col-md-9"><?php echo $panteon; ?> </div>
</div>

<div class="row">
  <div class="col-md-3"><p class="text-right"><strong>Domicilio:</strong></p> </div>
  <div class="col-md-9"><?php echo $domicilio; ?> </div>
</div>

<a href="<?= base_url('terreno/editar/'.$id) ?>" class="silver-flat-button">Editar difunto</a>
<a href="#" class="pomegranate-flat-button" id="elim">Elminar</a>

<script type="text/javascript">
  
  (function(){

    $("#elim").click(function(){
      swal({   
        title: "Estas seguro?",   
        text: "El registro se eliminara!",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Si, eliminalo!",   
        closeOnConfirm: false 
      }, function(){   
        window.location.replace("<?= base_url('terreno/eliminar/'.$id) ?>");
      });
    });

  })();

</script>