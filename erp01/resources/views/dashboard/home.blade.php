@extends("layouts.template")
@section("conteudo")
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div
                            class="card-header bg-card-header text-light text-uppercase"
                        >
                            <h5>
                                <i class="fas fa-chart-pie"></i> Gráfico de
                                vendas no mês
                            </h5>
                        </div>
                        <canvas
                            class="my-4"
                            id="myChart"
                            width="400"
                            height="250"
                        ></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div
                            class="card-header bg-card-header text-light text-uppercase"
                        >
                            <h5>
                                <i class="fas fa-chart-pie"></i> Gráfico de
                                vendas no mês
                            </h5>
                        </div>
                        <canvas
                            class="my-4"
                            id="myChart2"
                            width="400"
                            height="250"
                        ></canvas>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 my-3">
                    <div class="card bg-card">
                        <div class="card-body row">
                            <div class="col-md-4 col-ms-12 text-center">
                                <i
                                    class="fas fa-box-open font-4 text-light"
                                ></i>
                            </div>
                            <div class="col-md-8 col-ms-12">
                                <span class="float-left text-dark"
                                    >Entrada</span
                                >
                                <span class="h5 float-left text-dark"
                                    ><strong>R$ 250.000,00</strong></span
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card bg-card">
                        <div class="card-body row">
                            <div class="col-md-4 col-ms-12 text-center">
                                <i
                                    class="fas fa-external-link-square-alt font-4 text-light"
                                ></i>
                            </div>
                            <div class="col-md-8 col-ms-12">
                                <span class="float-left text-dark">Saída</span>
                                <span class="h5 float-left text-dark"
                                    ><strong>R$ 250.000,00</strong></span
                                >
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
                                <span class="float-left text-dark"
                                    >Despesas</span
                                >
                                <span class="h5 float-left text-dark"
                                    ><strong>R$ 250.000,00</strong></span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div
                            class="card-header bg-card-header text-light text-uppercase text-center"
                        >
                            <h5>
                                <i class="fas fa-box-open"></i> Pedidos
                                pendentes
                            </h5>
                        </div>
                        <div class="card-body row">
                            <div class="table-responsive">
                                <table
                                    cellpadding="0"
                                    cellspacing="0"
                                    class="table table-sm table-bordered"
                                >
                                    <thead>
                                        <tr>
                                            <th align="left">Data</th>
                                            <th align="left">Produto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div
                            class="card-header bg-card-header text-light text-uppercase text-center"
                        >
                            <h5>
                                <i class="fas fa-box-open"></i> Pedidos
                                finalizados
                            </h5>
                        </div>
                        <div class="card-body row">
                            <div class="table-responsive">
                                <table
                                    cellpadding="0"
                                    cellspacing="0"
                                    class="table table-sm table-bordered"
                                >
                                    <thead>
                                        <tr>
                                            <th align="left">Data</th>
                                            <th align="left">Produto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div
                            class="card-header bg-card-header text-light text-uppercase text-center"
                        >
                            <h5>
                                <i class="fas fa-box-open"></i> Pedidos
                                alterados
                            </h5>
                        </div>
                        <div class="card-body row">
                            <div class="table-responsive">
                                <table
                                    cellpadding="0"
                                    cellspacing="0"
                                    class="table table-sm table-bordered"
                                >
                                    <thead>
                                        <tr>
                                            <th align="left">Data</th>
                                            <th align="left">Produto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">19/05/17</td>
                                            <td align="left">
                                                kit minnie mouse...
                                            </td>
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

    <!--Rodape-->
</div>
@endsection