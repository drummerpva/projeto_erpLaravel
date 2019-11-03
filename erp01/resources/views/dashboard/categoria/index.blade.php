@extends("layouts.template") @section("conteudo")
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div
                            class="card-header bg-card-header text-light text-uppercase mb-3"
                        >
                            <h5>
                                <i class="fas fa-list"></i> LISTA DE CATEGORIAS
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <a
                                        href="{{ route('categorias.create') }}"
                                        class="btn btn-primary text-uppercase"
                                        ><i class="fas fa-plus"></i> Adicionar
                                        novo</a
                                    >
                                </div>
                            </div>
                            <div
                                class="bg-card-header-2 mb-3 p-4 border-radius-4"
                            >
                                <form class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="text-light"
                                                >Nome</label
                                            >
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    placeholder="Digite aqui..."
                                                    class="form-control"
                                                />
                                                <div class="input-group-append">
                                                    <input
                                                        type="submit"
                                                        value="Pesquisar"
                                                        class="btn btn-warning text-uppercase"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="table-responsive">
                                <table
                                    cellpadding="0"
                                    cellspacing="0"
                                    class="table table-sm table-bordered "
                                >
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-left" width="350">
                                                Categoria
                                            </th>
                                            <th class="text-center">Ativo</th>
                                            <th class="text-center" width="300">
                                                Ação
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($categorias as $cat)
                                        <tr>
                                            <td align="center">{{$cat->id}}</td>
                                            <td align="left">
                                                {{$cat->categoria}}
                                            </td>
                                            <td align="center">
                                                {{$cat->ativo_categoria}}
                                            </td>
                                            <td align="center">
                                                <a
                                                    href="{{route('categorias.show',$cat->id)}}"
                                                    class="btn btn-info btn-inline-block btn-sm"
                                                    ><i
                                                        class="fas fa-info-circle"
                                                    ></i>
                                                    Detalhes</a
                                                >
                                                <a
                                                    href="{{route('categorias.edit',$cat->id)}}"
                                                    class="btn btn-success btn-inline-block btn-sm"
                                                    ><i class="fas fa-edit"></i>
                                                    Editar</a
                                                >
                                                <a
                                                    href="{{route('categorias.show',$cat->id)}}"
                                                    class="btn btn-danger btn-inline-block btn-sm"
                                                    ><i
                                                        class="fas fa-trash-alt"
                                                    ></i>
                                                    Excluir</a
                                                >
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" align="center">
                                                Nenhum Item Encontrado
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav aria-label="...">
                                <ul class="pagination mb-0 justify-content-end">
                                    <li class="page-item disabled">
                                        <a
                                            class="page-link"
                                            href="#"
                                            tabindex="-1"
                                            >Previous</a
                                        >
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#"
                                            >2
                                            <span class="sr-only"
                                                >(current)</span
                                            ></a
                                        >
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!---
						<div class="alert alert-success  my-3" role="alert"><strong><i class="fas fa-check"></i> Mensagem de sucesso!</strong> You successfully read this important alert message.</div>
						<div class="alert alert-danger my-3" role="alert"><strong><i class="fas fa-times"></i> Mensagem de erro!</strong> Change a few things up and try submitting again.</div>
						<div class="alert alert-warning my-3" role="alert"> <strong><i class="fas fa-exclamation-triangle"></i> Mensagem de alertas!</strong> Better check yourself, you're not looking too good.</div>
						-->
                </div>
            </div>
        </div>
    </div>

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center"><small>CopyRight - 2018</small></div>
        </div>
    </footer>
</div>
@endsection
