<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Entrar</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link href="<?= base_url('assets/css/sweetalert.css') ?>" rel="stylesheet">
<script src="<?= base_url('assets/js/sweetalert.min.js'); ?> "></script>
</head>
<body>
<?php echo form_open('login/addLogin/', array('class' => 'login')); ?>
    <h1>Entrar</h1>
    <input type="email" name="email" class="login-input" placeholder="Correo electronico" autofocus>
    <input type="password" name="password" class="login-input" placeholder="Contraseña">
    <input type="submit" value="Login" class="login-submit">
  </form>

</body>
</html>
