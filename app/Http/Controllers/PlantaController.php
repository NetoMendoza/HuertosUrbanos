<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use App\Models\TipoPlanta;
use Illuminate\Http\Request;

/**
 * Class PlantaController
 * @package App\Http\Controllers
 */
class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plantas = Planta::join('tipo_plantas','tipo_plantas.id_tipo_plan','=','plantas.id_tipo_plan')
        ->select(
            'tipo_plantas.tipo_plan as tipo_plan',
            'plantas.*'
        )->paginate();

        return view('planta.index', compact('plantas'))
            ->with('i', (request()->input('page', 1) - 1) * $plantas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planta = new Planta();
        $tipo_planta=TipoPlanta::select('id_tipo_plan','tipo_plan')->get('id_tipo_plan','tipo_plan');
        return view('planta.create', compact('planta','tipo_planta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Planta::$rules);
        $request->validate([
            'id_tipo_plan' => 'required|numeric|digits_between:1,5',
            'nomb_plan' => 'required|string|min:3|max:70',
            'desc_plan' => 'required|string|min:10'
        ]);
        $consulta=Planta::select('id_plan')
        ->where('nomb_plan','=',$request->nomb_plan)
        ->where('vari_plan','=',$request->vari_plan)
        ->get()->count();
        if($consulta>0){
            return redirect()->back()->with('error', 'Registro Duplicado');
        }
        

        $planta = Planta::create($request->all());

        return redirect()->route('plantas.index')
            ->with('success', 'Planta creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planta = Planta::find($id);

        return view('planta.show', compact('planta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planta = Planta::find($id);
        $tipo_planta=TipoPlanta::select('id_tipo_plan','tipo_plan')->get('id_tipo_plan','tipo_plan');

        return view('planta.edit', compact('planta','tipo_planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Planta $planta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planta $planta)
    {
        request()->validate(Planta::$rules);
        $request->validate([
            'id_tipo_plan' => 'required|numeric|digits_between:1,5',
            'nomb_plan' => 'required|string|min:3|max:70',
            'desc_plan' => 'required|string|min:10'
        ]);
        $consulta=Planta::select('id_plan')
        ->where('nomb_plan','=',$request->nomb_plan)
        ->where('vari_plan','=',$request->vari_plan)
        ->get()->count();
        if($consulta>0){
            return redirect()->back()->with('error', 'Registro Duplicado');
        }
        
        $planta->update($request->all());

        return redirect()->route('plantas.index')
            ->with('success', 'Planta Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $planta = Planta::find($id)->delete();

        return redirect()->route('plantas.index')
            ->with('success', 'Planta se eliminó exitosamente');
    }
}
