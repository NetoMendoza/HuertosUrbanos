<?php

namespace App\Http\Controllers;

use App\Models\TipoAfinidad;
use Illuminate\Http\Request;

/**
 * Class TipoAfinidadController
 * @package App\Http\Controllers
 */
class TipoAfinidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoAfinidads = TipoAfinidad::paginate();

        return view('tipo-afinidad.index', compact('tipoAfinidads'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoAfinidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoAfinidad = new TipoAfinidad();
        return view('tipo-afinidad.create', compact('tipoAfinidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoAfinidad::$rules);

        $tipoAfinidad = TipoAfinidad::create($request->all());

        return redirect()->route('tipo-afinidads.index')
            ->with('success', 'TipoAfinidad creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoAfinidad = TipoAfinidad::find($id);

        return view('tipo-afinidad.show', compact('tipoAfinidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoAfinidad = TipoAfinidad::find($id);

        return view('tipo-afinidad.edit', compact('tipoAfinidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoAfinidad $tipoAfinidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoAfinidad $tipoAfinidad)
    {
        request()->validate(TipoAfinidad::$rules);

        $tipoAfinidad->update($request->all());

        return redirect()->route('tipo-afinidads.index')
            ->with('success', 'TipoAfinidad Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoAfinidad = TipoAfinidad::find($id)->delete();

        return redirect()->route('tipo-afinidads.index')
            ->with('success', 'TipoAfinidad se eliminó exitosamente');
    }
}
