$.ajax({
    url         :   'http://localhost/panteones/estadistica/mes',
    type        :   'POST',
    async       :   true
}).
done(function(data){
    var datos = $.parseJSON(data);
    var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: [datos[0].mes, datos[1].mes, datos[2].mes, datos[3].mes, datos[4].mes, datos[5].mes, datos[6].mes],
	    datasets: [
	        {
	            label: "Tasa de mortalidad mensual",
	            backgroundColor: "rgba(255,99,132,0.2)",
	            borderColor: "rgba(255,99,132,1)",
	            borderWidth: 1,
	            hoverBackgroundColor: "rgba(255,99,132,0.4)",
	            hoverBorderColor: "rgba(255,99,132,1)",
	            data: [datos[0].cantidad, datos[1].cantidad, datos[2].cantidad, datos[3].cantidad, datos[4].cantidad, datos[5].cantidad, datos[6].cantidad],
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
});


$.ajax({
    url         :   'http://localhost/panteones/estadistica/archivo',
    type        :   'POST',
    async       :   true
}).
done(function(data){
	var datos = $.parseJSON(data);
	var ctxLine = document.getElementById("myLineChart");
	var myLineChart = new Chart(ctxLine, {
	    type: 'line',
	    data: data = {
	    labels: [datos[0].mes, datos[1].mes, datos[2].mes, datos[3].mes, datos[4].mes, datos[5].mes, datos[6].mes],
	    datasets: [
	        {
	            label: "Tasa de registro",
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
	            data: [datos[0].cantidad, datos[1].cantidad, datos[2].cantidad, datos[3].cantidad, datos[4].cantidad, datos[5].cantidad, datos[6].cantidad],
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
});

$.ajax({
    url         :   'http://localhost/panteones/estadistica/panteon',
    type        :   'POST',
    async       :   true
}).
done(function(data){
	var datos = $.parseJSON(data);
	var ctx1 = document.getElementById("myPieChart");
	var options = {
	     
	    };
	var data = {
	    labels: [
	        "San Blas",
	        "San Pedro"
	    ],
	    datasets: [
	        {
	            data: [datos.blas,  datos.pedro],
	            backgroundColor: [
	                "#FF6384",
	                "#FFCE56"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
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
});

$.ajax({
    url         :   'http://localhost/panteones/estadistica/genero',
    type        :   'POST',
    async       :   true
}).
done(function(data){
	var datos = $.parseJSON(data);
	var ctx2 = document.getElementById("myDoughnutChart");
	var options = {
	     
	    };
	var data = {
	    labels: [
	        "Masculino",
	        "Femenino"
	    ],
	    datasets: [
	        {
	            data: [datos.masculino,  datos.femenino],
	            backgroundColor: [
	                "#FF6384",
	                "#FFCE56"
	            ],
	            hoverBackgroundColor: [
	                "#FF6384",
	                "#FFCE56"
	            ]
	        }]
	};
	// And for a doughnut chart
	var myDoughnutChart = new Chart(ctx2, {
	    type: 'doughnut',
	    data: data,
	    options: options
	});
	
});


