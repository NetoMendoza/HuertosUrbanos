<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use App\Models\Insumo;
use Illuminate\Http\Request;
use App\Models\Requerimiento;

/**
 * Class RequerimientoController
 * @package App\Http\Controllers
 */
class RequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requerimientos = Requerimiento::join('insumos', 'insumos.id_insu', '=', 'requerimientos.id_insu')
        ->join('guias', 'requerimientos.id_guia', '=', 'guias.id_guia')
        ->join('plantas', 'guias.id_plan', '=', 'plantas.id_plan')
        ->join('expertos', 'guias.id_expe', '=', 'expertos.id_expe')
        ->join('users', 'users.id', '=', 'expertos.id_usuario')
        ->select('insumos.nomb_insu', 'users.name',
        'plantas.nomb_plan', 'requerimientos.*')->paginate();

        return view('requerimiento.index', compact('requerimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $requerimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $guia = Guia::join('plantas', 'guias.id_plan', '=', 'plantas.id_plan')
            ->join('expertos', 'guias.id_expe', '=', 'expertos.id_expe')
            ->join('users', 'users.id', '=', 'expertos.id_usuario')
            ->select('id_guia', 'users.name','plantas.nomb_plan')->get();
        $insumo=Insumo::select('id_insu','nomb_insu')->get();    
        $requerimiento = new Requerimiento();
        return view('requerimiento.create', compact('requerimiento','insumo','guia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Requerimiento::$rules);

        $requerimiento = Requerimiento::create($request->all());

        return redirect()->route('requerimientos.index')
            ->with('success', 'Requerimiento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requerimiento = Requerimiento::find($id);

        return view('requerimiento.show', compact('requerimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guia = Guia::join('plantas', 'guias.id_plan', '=', 'plantas.id_plan')
            ->join('expertos', 'guias.id_expe', '=', 'expertos.id_expe')
            ->join('users', 'users.id', '=', 'expertos.id_usuario')
            ->select('id_guia', 'users.name','plantas.nomb_plan')->get();
        $insumo=Insumo::select('id_insu','nomb_insu')->get();    
        $requerimiento = Requerimiento::find($id);

        return view('requerimiento.edit', compact('requerimiento','insumo','requerimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Requerimiento $requerimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requerimiento $requerimiento)
    {
        request()->validate(Requerimiento::$rules);

        $requerimiento->update($request->all());

        return redirect()->route('requerimientos.index')
            ->with('success', 'Requerimiento Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $requerimiento = Requerimiento::find($id)->delete();

        return redirect()->route('requerimientos.index')
            ->with('success', 'Requerimiento se eliminó exitosamente');
    }
}
