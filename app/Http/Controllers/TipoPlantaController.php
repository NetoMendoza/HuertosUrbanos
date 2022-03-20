<?php

namespace App\Http\Controllers;

use App\Models\TipoPlanta;
use Illuminate\Http\Request;

/**
 * Class TipoPlantaController
 * @package App\Http\Controllers
 */
class TipoPlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoPlantas = TipoPlanta::paginate();

        return view('tipo-planta.index', compact('tipoPlantas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoPlantas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoPlanta = new TipoPlanta();
        return view('tipo-planta.create', compact('tipoPlanta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoPlanta::$rules);
        $request->validate([
            'tipo_plan' => 'required|string|max:50|min:3|unique:tipo_plantas',
        ]);
        $tipoPlanta = TipoPlanta::create($request->all());

        return redirect()->route('tipo-plantas.index')
            ->with('success', 'TipoPlanta creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoPlanta = TipoPlanta::find($id);

        return view('tipo-planta.show', compact('tipoPlanta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoPlanta = TipoPlanta::find($id);

        return view('tipo-planta.edit', compact('tipoPlanta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoPlanta $tipoPlanta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPlanta $tipoPlanta)
    {
        request()->validate(TipoPlanta::$rules);
        $request->validate([
            'tipo_plan' => 'required|string|max:50|min:3|unique:tipo_plantas',
        ]);
        
        $tipoPlanta->update($request->all());

        return redirect()->route('tipo-plantas.index')
            ->with('success', 'TipoPlanta Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoPlanta = TipoPlanta::find($id)->delete();

        return redirect()->route('tipo-plantas.index')
            ->with('success', 'TipoPlanta se eliminó exitosamente');
    }
}
