<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla panteones</title>
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/sweetalert.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo.css') ?>">

    <script src="<?= base_url('assets/js/jquery-1.11.3.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?> "></script>
    <script src="<?= base_url('assets/js/sweetalert.min.js'); ?> "></script>
    
  
  </head>
  <body>
    


    <nav class="navbar navbar-inverse" id="barra">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:white;">Panteones</a>
        </div>
 
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="<?= base_url() ?>">Registro</a></li>
            <li><a href="<?= base_url('archivo') ?>">Archivo</a></li>
            <li><a href="<?= base_url('estadistica') ?>">Estadisticas</a></li>
            <li><a href="<?= base_url('terreno') ?>">Terrenos</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Config <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?= base_url('ajustes') ?>">Cambiar contraseña</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?= base_url('ajustes/salir') ?>">Salir</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

     <div id="envoltura">
   

   