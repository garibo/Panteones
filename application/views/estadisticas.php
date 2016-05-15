<script src="<?= base_url('assets/js/Chart.min.js'); ?> "></script>
<h1 class="text-center">Estadisticas</h1>
<canvas id="myChart" width="400px" height="200px"></canvas>
<canvas id="myLineChart" width="400px" height="200px"></canvas>
<div class="row">
  <div class="col-md-6">
  	<h3 class="text-center">Cantidad por panteon</h3>
  	<canvas id="myPieChart" width="100%" height="100%"></canvas>
  </div>
  <div class="col-md-6">
  	<h3 class="text-center">Mortalidad por genero</h3>
  	<canvas id="myDoughnutChart" width="100%" height="100%"></canvas>
  </div>
</div>
<script src="<?= base_url('assets/js/estadisticas.js'); ?> "></script>