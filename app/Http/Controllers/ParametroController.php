<?php

namespace App\Http\Controllers;

use App\Models\Medida;
use App\Models\Planta;
use App\Models\Parametro;
use Illuminate\Http\Request;

/**
 * Class ParametroController
 * @package App\Http\Controllers
 */
class ParametroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parametros = Parametro::join('medidas','medidas.id_medi','=','parametros.id_medi')
        ->join('plantas','plantas.id_plan','=','parametros.id_plan')
        ->select('medidas.nomb_medi','medidas.unid_medi',
            'plantas.nomb_plan',
            'parametros.*'
        )->paginate();

        return view('parametro.index', compact('parametros'))
            ->with('i', (request()->input('page', 1) - 1) * $parametros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parametro = new Parametro();
        $medida=Medida::select('id_medi','nomb_medi','unid_medi')->get();
        $planta=Planta::select('id_plan','nomb_plan')->get();
        return view('parametro.create', compact('parametro','medida','planta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Parametro::$rules);
        $request->validate([
            'cant_param' => 'required|string|min:1|max:49'
        ]);
        
        $parametro = Parametro::create($request->all());

        return redirect()->route('parametros.index')
            ->with('success', 'Parametro creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parametro = Parametro::find($id);

        return view('parametro.show', compact('parametro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parametro = Parametro::find($id);
        
        $medida=Medida::select('id_medi','nomb_medi','unid_medi')->get();
        $planta=Planta::select('id_plan','nomb_plan')->get();

        return view('parametro.edit', compact('parametro','medida','planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Parametro $parametro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parametro $parametro)
    {
        request()->validate(Parametro::$rules);
        $request->validate([
            'cant_param' => 'required|string|min:1|max:49'
        ]);
        $parametro->update($request->all());

        return redirect()->route('parametros.index')
            ->with('success', 'Parametro Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $parametro = Parametro::find($id)->delete();

        return redirect()->route('parametros.index')
            ->with('success', 'Parametro se eliminó exitosamente');
    }
}
