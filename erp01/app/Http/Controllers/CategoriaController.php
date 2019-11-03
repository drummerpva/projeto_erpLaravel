<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = [
            "categorias" => Categoria::all(),
        ];

        return view("dashboard.categoria.index", $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.categoria.create_edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Categoria();
        $obj->categoria = $request->input('categoria');
        $obj->ativo_categoria = $request->input('ativo_categoria');
        $obj->save();
        return redirect("categorias");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c = Categoria::find($id);
        if ($c) {
            return view("dashboard.categoria.show", compact("c"));
        } else {
            return redirect("categorias");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = Categoria::find($id);
        if ($c) {
            return view("dashboard.categoria.create_edit", compact("c"));
        } else {
            return redirect("categorias");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $c = Categoria::find($id);
        if ($c) {
            $c->categoria       = $request->input('categoria');
            $c->ativo_categoria = $request->input('ativo_categoria');
            $c->save();
        }
        return redirect("categorias");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = Categoria::find($id);
        if ($c) {
            $c->delete();
        }
        return redirect("categorias");
    }
}
