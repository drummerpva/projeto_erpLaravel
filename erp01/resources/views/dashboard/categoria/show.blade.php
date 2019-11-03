@extends("layouts.template")
@section("conteudo")
<div class="container-fluid">
    <div class="card mb-4">
    <div class="card-body">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header bg-card-header text-light text-uppercase mb-3"><h5><i class="fas fa-plus"></i> Adicionar categoria</h5></div>
                    <div class="card-body">
                        <div class="row">
                        </div>
                        <div class="mb-3 p-4 border-radius-4">
                        <!-- Opcional alertas-->
                        <div class="alert alert-success  my-3" role="alert"><strong><i class="fas fa-check"></i> Mensagem de sucesso!</strong> Alteração concluída com sucesso!.</div>
                        <div class="alert alert-danger my-3" role="alert"><strong><i class="fas fa-times"></i> Mensagem de erro!</strong> Suas alterações não foram concluídas!</div>
                                <form class="form-group form-group-alt" action="{{route('categorias.destroy',$c->id)}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE" />
                                @csrf
                                <div class="row px-md-5">
                                    <div class="col-md-6 mb-3">
                                        <label class="text-dark">Nome</label>
                                        <input name="categoria" type="text" value="{{ $c->categoria ?? null}}" placeholder="Digite aqui..." class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="text-dark">Ativo</label>
                                        <select name="ativo_categoria" class="form-control">
                                            <option value="S" @isset($c) {{($c->ativo_categoria == 'S') ? "selected" : null}} @endisset>Sim</option>
                                            <option value="N" @isset($c) {{($c->ativo_categoria == 'N') ? "selected" : null}} @endisset>Não</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <input type="submit" class="btn btn-danger d-block m-auto text-uppercase" data-toggle="modal" data-target="#modal" value="Excluir Categoria"/></br>
                                    </div>
                                </div>
                            </form>
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
@endsection
