<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema ERP - Douglas Poma</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, intiali-scale =1, shrink-to-fit= no">		
		<!--css-->
		<link rel="stylesheet" href="{{asset('assets/bibliotecas/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/bibliotecas/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/sb-admin.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/estilo.css')}}">
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    </head>
        
	
	<body class="sticky-footer">
        @include("layouts.inc.header")
        <div class="content-wrapper">
            @yield("conteudo")
        </div>
		

		
			
		<!--javascript-->
		<script type="text/javascript" src="{{asset('assets/bibliotecas/jquery/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/bibliotecas/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/bibliotecas/jquery-easing/jquery.easing.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/sb-admin.min.js')}}"></script>
		
		  <!-- Graphs -->
    <script src="{{asset('assets/bibliotecas/chart.js/Chart.min.js')}}"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Janeiro", "Fervereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 10034],
            lineTension: 0,
            backgroundColor: '#607bd7',
            borderColor: '#607bd7',
            borderWidth: 1,
            pointBackgroundColor: '#607bd7'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
	
    <script>
      var ctx = document.getElementById("myChart2");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Janeiro", "Fervereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 43489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#E34B7A',
            borderWidth: 4,
            pointBackgroundColor: '#E34B7A'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
	</body>
</html>