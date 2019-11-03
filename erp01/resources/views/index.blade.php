<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema ERP - mjailton</title>
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
		<!--navegação-->
		<nav class="navbar navbar-light bg-light navbar-expand-lg  fixed-top" id="mainNav">
			
		<a href="index.html" class="navbar-brand">ERP mjailton</a></li>				
			
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarcurso" aria-controls="navbarcurso" aria-expanded="false" aria-label="Navegação toggle">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbarcurso" class="collapse navbar-collapse text-light">
				<ul class="navbar-nav  navbar-sidenav" id="linksacordeon">	
					<!--<li class="card border-0 mb-3 text-dark p-3">
					<div class="">	
						<div class="col-4 d-inline-block"><img src="img/foto01.png" class="img-fluid border-radius-50"></div>
						<div class="col-8 d-inline-block">
							<span>Jailton Sousa nascimento</span>
							<span class="d-block">Admin</small>
							<small class="online d-block">online</small>
						</div>
					</div>
					</li>-->
					<li class="nav-item  font-nav text-uppercase"  data-toggle="tooltip" data-placement="right">
						<a class="nav-link" href="index.html">
						<span class="nav-link-text text-light"><i class="fa fa-fw fa-home"></i> Home</span>
						</a>
					</li>					
					
					<ul class=" pl-0 text-uppercase">
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Cadastros</b></small>
					<li class="nav-item font-nav"  data-toggle="tooltip" data-placement="right">
						<a class="nav-link nav-link-collapse collapse text-light" href="#linkscomponentes" data-toggle="collapse" data-parent="#linksacordeon">
							<span class="nav-link-text"><i class="far fa-fw fa-file"></i> Produto</span>
						</a>
						<!--submenu-->
						<ul class="ml-0 sidenav-second-level collapse" id="linkscomponentes">
							<li><a href="lst-produto.html" class="nav-link text-light ml-4"> <i class="fas fa-list"></i> Produto</a>	</li>
							<li><a href="lst-categoria.html" class="nav-link text-light ml-4"><i class="fas fa-list"></i> Categoria</a></li>
							<li><a href="lst-subcategoria.html" class="nav-link text-light ml-4"><i class="fas fa-list"></i> Subcategoria</a></li>
							<li><a href="lst-grupo.html" class="nav-link text-light ml-4"><i class="fas fa-list"></i> Grupo</a></li>
							<li><a href="lst-subgrupo.html" class="nav-link text-light ml-4"><i class="fas fa-list"></i> Subgrupo</a></li>
							<li><a href="lst-marca.html" class="nav-link text-light ml-4"><i class="fas fa-list"></i> Marca</a></li>
							<li><a href="lst-modelo.html" class="nav-link text-light ml-4"><i class="fas fa-list"></i> Modelo</a></li>
						</ul>
					</li>
					<li class="nav-item font-nav text-light"   data-toggle="tooltip" data-placement="right">
						<a href="lst-cliente.html" class="nav-link text-light"><i class="far fa-fw fa-user"></i>  Cliente</a>
					</li>
					</ul>
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>PDV</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="lst-vendas-pdv.html" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Vendas</a>
						</li>
					</ul>
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Pedidos</b></small>
						<li class="nav-item font-nav data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Todos os pedidos</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Pedidos pendentes</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Novo pedido</a>
						</li>
					</ul>
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Loja virtual</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Todas as vendas</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Vendas não enviadas</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Vendas não pagas</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Vendas pagas</a>
						</li>
					</ul>
					
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Movimentações em geral</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Todas as movimentações</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Resumos de vendas</a>
						</li>
					</ul>
					
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>NOTA FISCAL ELETRÔNICA</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Lista de notas</a>
						</li>
					</ul>
					
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Estoque</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Entrada</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Vendas</a>
						</li>
					</ul>
					
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Entradas</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Entrada</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Fornecedor</a>
						</li>
					</ul>
					
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Departamento pessoal</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Demissões</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Admissões</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Folha de pagamento</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Controle de ponto</a>
						</li>
					</ul>
					
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Fiscal</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Entradas e saídas</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Apuração e atributos</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Receitas</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Despesas</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Custos</a>
						</li>
					</ul>
					
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Contábil</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Demostrações contábeis</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Crédito/debito</a>
						</li>
					</ul>
					
					<ul class=" pl-0 text-uppercase">					
					<small class="bg-cat px-3 pt-3 d-block text-uppercase"><b>Produção</b></small>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i>Matéria-prima</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Custo de produção</a>
						</li>
						<li class="nav-item font-nav" data-toggle="tooltip" data-placement="right">
							<a href="#" class="nav-link text-light"><i class="far fa-fw fa-user"></i> Estoque matéria-prima</a>
						</li>
					</ul>
				</ul>
								
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="#" class="nav-link text-uppercase"><i class="fas fa-lock"></i> Login</a>
					</li>
					<li class="nav-item ml-5 ml-0 mt-1">
							<img src="img/foto01.png" class="img-fluid border-radius-50 img-user">
							<span class="text-dark">Manoel jailton</span>
					</li>
				</ul>
				
			</div>
		</nav>
		
		
		<div class="content-wrapper">
			<div class="container-fluid">
			<div class="card mb-4">
			<div class="card-body">
				
				<div class="row">
					<div class="col-md-6">
						<div class="card">
						<div class="card-header bg-card-header text-light text-uppercase"><h5><i class="fas fa-chart-pie"></i> Gráfico de vendas no mês</h5></div>
							<canvas class="my-4" id="myChart" width="400" height="250"></canvas>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
						<div class="card-header bg-card-header text-light text-uppercase"><h5><i class="fas fa-chart-pie"></i> Gráfico de vendas no mês</h5></div>
							<canvas class="my-4" id="myChart2" width="400" height="250"></canvas>
						</div>
					</div>
				</div>
				
				<div class="row mt-5">
					<div class="col-md-4 my-3">
						<div class="card bg-card">
							<div class="card-body row">
								<div class="col-md-4 col-ms-12 text-center">
									<i class="fas fa-box-open font-4 text-light"></i>
								</div>
								<div class="col-md-8 col-ms-12">
									<span class="float-left text-dark">Entrada</span>
									<span class="h5 float-left text-dark"><strong>R$ 250.000,00</strong></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 my-3">
						<div class="card bg-card">
							<div class="card-body row">
								<div class="col-md-4 col-ms-12 text-center">
									<i class="fas fa-external-link-square-alt font-4 text-light"></i>
								</div>
								<div class="col-md-8 col-ms-12">
									<span class="float-left text-dark">Saída</span>
									<span class="h5 float-left text-dark"><strong>R$ 250.000,00</strong></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 my-3">
						<div class="card bg-card">
							<div class="card-body row">
								<div class="col-md-4 col-ms-12 text-center">
									<i class="fab fa-bitcoin font-4 text-light"></i>
								</div>
								<div class="col-md-8 col-ms-12">
									<span class="float-left text-dark">Despesas</span>
									<span class="h5 float-left text-dark"><strong>R$ 250.000,00</strong></span>
								</div>
							</div>
						</div>
					</div>
				</div>	
				
				<div class="row mt-5">
					<div class="col-md-4 mb-3">
						<div class="card">
						<div class="card-header bg-card-header text-light text-uppercase text-center">
							<h5><i class="fas fa-box-open"></i> Pedidos pendentes</h5>
						</div>
							<div class="card-body row">
								<div class="table-responsive">
									<table cellpadding="0" cellspacing="0"  class="table table-sm table-bordered">
										<thead>
											<tr>
												<th align="left">Data</th>
												<th align="left">Produto</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>								
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 mb-3">
						<div class="card">
						<div class="card-header bg-card-header text-light text-uppercase text-center">
							<h5><i class="fas fa-box-open"></i> Pedidos finalizados</h5>
						</div>
							<div class="card-body row">
								<div class="table-responsive">
									<table cellpadding="0" cellspacing="0"  class="table table-sm table-bordered">
										<thead>
											<tr>
												<th align="left">Data</th>
												<th align="left">Produto</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>								
										</tbody>
									</table>
								</div>
						</div>
					</div>
					</div>
					<div class="col-md-4 mb-3">
						<div class="card">
						<div class="card-header bg-card-header text-light text-uppercase text-center">
							<h5><i class="fas fa-box-open"></i> Pedidos alterados</h5>
						</div>
							<div class="card-body row">
								<div class="table-responsive">
									<table cellpadding="0" cellspacing="0"  class="table table-sm table-bordered">
										<thead>
											<tr>
												<th align="left">Data</th>
												<th align="left">Produto</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>
											<tr>
												<td align="left">19/05/17</td>
												<td align="left">kit minnie mouse...</td>
											</tr>								
										</tbody>
									</table>
								</div>
					</div>
				</div>	
					
					
				</div>
			</div>
			</div>
				
			</div>
			
			<footer class="sticky-footer">
				<div class="container">
					<div class="text-center">
						<small>CopyRight - 2018</small>
					</div>
				</div>
			</footer>
			
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