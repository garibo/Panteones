<script src="<?= base_url('assets/js/Chart.min.js'); ?> "></script>
<h1 class="text-center">Estadisticas</h1>
<canvas id="myChart" width="400px" height="200px"></canvas>
<canvas id="myLineChart" width="400px" height="200px"></canvas>
<div class="row">
  <div class="col-md-6">
  	<h3 class="text-center">Mortalidad por genero</h3>
  	<canvas id="myPieChart" width="100%" height="100%"></canvas>
  </div>
  <div class="col-md-6">
  	<h3 class="text-center">Cantidad por panteon</h3>
  	<canvas id="myDoughnutChart" width="100%" height="100%"></canvas>
  </div>
</div>

<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "Tasa de mortalidad mensual",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            borderWidth: 1,
            hoverBackgroundColor: "rgba(255,99,132,0.4)",
            hoverBorderColor: "rgba(255,99,132,1)",
            data: [65, 59, 80, 81, 56, 55, 40],
        }
    ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<script>
var ctxLine = document.getElementById("myLineChart");
var myLineChart = new Chart(ctxLine, {
    type: 'line',
    data: data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "Tasa de mortalidad por edades",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [65, 59, 80, 81, 56, 55, 40],
        }
    ]
},
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<script type="text/javascript">
var ctx1 = document.getElementById("myPieChart");
var ctx2 = document.getElementById("myDoughnutChart");
var options = {
     
    };

var data = {
    labels: [
        "Red",
        "Green",
        "Yellow"
    ],
    datasets: [
        {
            data: [300, 50, 100],
            backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
            hoverBackgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ]
        }]
};
// For a pie chart
var myPieChart = new Chart(ctx1,{
    type: 'pie',
    data: data,
    options: options
});
// And for a doughnut chart
var myDoughnutChart = new Chart(ctx2, {
    type: 'doughnut',
    data: data,
    options: options
});
</script>