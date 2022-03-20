<?php

namespace App\Http\Controllers;

use App\Models\TipoInsumo;
use Illuminate\Http\Request;

/**
 * Class TipoInsumoController
 * @package App\Http\Controllers
 */
class TipoInsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoInsumos = TipoInsumo::paginate();

        return view('tipo-insumo.index', compact('tipoInsumos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoInsumos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoInsumo = new TipoInsumo();
        return view('tipo-insumo.create', compact('tipoInsumo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoInsumo::$rules);

        $tipoInsumo = TipoInsumo::create($request->all());

        return redirect()->route('tipo-insumos.index')
            ->with('success', 'TipoInsumo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoInsumo = TipoInsumo::find($id);

        return view('tipo-insumo.show', compact('tipoInsumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoInsumo = TipoInsumo::find($id);

        return view('tipo-insumo.edit', compact('tipoInsumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoInsumo $tipoInsumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoInsumo $tipoInsumo)
    {
        request()->validate(TipoInsumo::$rules);

        $tipoInsumo->update($request->all());

        return redirect()->route('tipo-insumos.index')
            ->with('success', 'TipoInsumo Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoInsumo = TipoInsumo::find($id)->delete();

        return redirect()->route('tipo-insumos.index')
            ->with('success', 'TipoInsumo se eliminó exitosamente');
    }
}
