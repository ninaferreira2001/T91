<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class PizzariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Pizzaria::OrderBy('pizzaria');
        return View('pizzaria.index')
                ->with(compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = null;
        return view('tipo.form')
                ->with(compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new Pizzaria();
        $tipo->fill($request->all());
        $tipo->save();

        return redirect()
                ->route('tipo.index')
                ->with('success', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pizzaria  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $tipo = Pizzaria::find($id);
        return view('tipo.show')
                ->with(compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pizzaria  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $tipo = Pizzaria::find($id);
        return view('tipo.form')
               ->with(compact('tipo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pizzaria  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $tipo = Pizzaria::find($id);

        $tipo->fill($request->all());
        $tipo->save();

        return redirect()
                ->route('tipo.index')
                ->with('success', 'Atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pizzaria  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $tipo = Pizzaria::find($id);

        $tipo->fill($id);
        $tipo->delete();

        return redirect()
                ->route('pizzaria.index')
                ->with('danger', 'Deletado com sucesso!');
    }
}
