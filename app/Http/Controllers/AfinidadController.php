<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use App\Models\Afinidad;
use App\Models\TipoAfinidad;
use Illuminate\Http\Request;

/**
 * Class AfinidadController
 * @package App\Http\Controllers
 */
class AfinidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $afinidads = Afinidad::join('tipo_afinidads', 'tipo_afinidads.id_tipo_afin', '=', 'afinidads.id_tipo_afin')
            ->join('plantas as pa', 'afinidads.id_plan', '=', 'pa.id_plan')
            ->join('plantas as pb', 'afinidads.id_plant2', '=', 'pb.id_plan')
            //->where('afinidads.id_plant2', '<>', 'plantas.id_plan')
            ->select('afinidads.*', 'pa.nomb_plan', 'pb.nomb_plan as nomb_plan2','tipo_afinidads.tipo_afin')->paginate();
        

        return view('afinidad.index', compact('afinidads'))
            ->with('i', (request()->input('page', 1) - 1) * $afinidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $tipo_afinidad=TipoAfinidad::select('id_tipo_afin','tipo_afin')->get();
        $planta=Planta::select('id_plan','nomb_plan')->get();
        $afinidad = new Afinidad();
        return view('afinidad.create', compact('afinidad','planta','tipo_afinidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate(Afinidad::$rules);
        $request->validate([
            'id_tipo_afin' => 'required|numeric|digits_between:1,5',
            'id_plan' => 'required|numeric',
            'id_plant2' => 'required|numeric|different:id_plan'
        ]);
        $consulta=Afinidad::select('id_tipo_afin')
        ->where('id_plan','=',$request->id_plan)
        ->where('id_plant2','=',$request->id_plant2)
        ->get()->count();
        /*->wherein('id_plan',[$request->id_plan,$request->id_plant2])
        ->wherein('id_plant2',[$request->id_plan,$request->id_plant2])
        ->get()->count();*/
        if($consulta>0){
            return redirect()->back()->with('error', 'Registro Duplicado');
            /*return redirect()->route('afinidads.index')
            ->with('error', 'registro');*/
        }
        
        $afinidad = Afinidad::create($request->all());

        return redirect()->route('afinidads.index')
            ->with('success', 'Afinidad creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $afinidad = Afinidad::find($id);

        return view('afinidad.show', compact('afinidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_afinidad=TipoAfinidad::select('id_tipo_afin','tipo_afin')->get();
        $planta=Planta::select('id_plan','nomb_plan')->get();
        $afinidad = Afinidad::find($id);

        return view('afinidad.edit', compact('afinidad','tipo_afinidad','planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Afinidad $afinidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Afinidad::$rules);

        $afinidad = Afinidad::find($id);
        $afinidad->update($request->all());

        return redirect()->route('afinidads.index')
            ->with('success', 'Afinidad Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $afinidad = Afinidad::find($id)->delete();

        return redirect()->route('afinidads.index')
            ->with('success', 'Afinidad se eliminó exitosamente');
    }
}
