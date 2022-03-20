<?php

namespace App\Http\Controllers;

use App\Models\TipoActividad;
use Illuminate\Http\Request;

/**
 * Class TipoActividadController
 * @package App\Http\Controllers
 */
class TipoActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoActividads = TipoActividad::paginate();

        return view('tipo-actividad.index', compact('tipoActividads'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoActividads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoActividad = new TipoActividad();
        return view('tipo-actividad.create', compact('tipoActividad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoActividad::$rules);

        $tipoActividad = TipoActividad::create($request->all());

        return redirect()->route('tipo-actividads.index')
            ->with('success', 'TipoActividad creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoActividad = TipoActividad::find($id);

        return view('tipo-actividad.show', compact('tipoActividad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoActividad = TipoActividad::find($id);

        return view('tipo-actividad.edit', compact('tipoActividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoActividad $tipoActividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoActividad $tipoActividad)
    {
        request()->validate(TipoActividad::$rules);

        $tipoActividad->update($request->all());

        return redirect()->route('tipo-actividads.index')
            ->with('success', 'TipoActividad Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoActividad = TipoActividad::find($id)->delete();

        return redirect()->route('tipo-actividads.index')
            ->with('success', 'TipoActividad se eliminó exitosamente');
    }
}
