<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use App\Models\Actividad;
use Illuminate\Http\Request;
use App\Models\TipoActividad;

/**
 * Class ActividadController
 * @package App\Http\Controllers
 */
class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividads = Actividad::join('tipo_actividads', 'actividads.id_tipo_acti', '=', 'tipo_actividads.id_tipo_acti')
            ->join('guias', 'actividads.id_guia', '=', 'guias.id_guia')
            ->join('plantas', 'guias.id_plan', '=', 'plantas.id_plan')
            ->join('expertos', 'guias.id_expe', '=', 'expertos.id_expe')
            ->join('users', 'users.id', '=', 'expertos.id_usuario')
            ->select('tipo_actividads.nomb_tipo_acti', 'users.name',
            'plantas.nomb_plan', 'actividads.*')->paginate();
            //->where('clientes.id_usuario', Auth::user()->id)->paginate();
        //$clieDisps = ClieDisp::where('id_cliente', $user->id_cliente)->paginate();


        return view('actividad.index', compact('actividads'))
            ->with('i', (request()->input('page', 1) - 1) * $actividads->perPage());
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
        $tipo_actividad=TipoActividad::select('id_tipo_acti','nomb_tipo_acti')->get();
        $actividad = new Actividad();
        return view('actividad.create', compact('actividad','guia','tipo_actividad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Actividad::$rules);

        $actividad = Actividad::create($request->all());

        return redirect()->route('actividads.index')
            ->with('success', 'Actividad creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividad = Actividad::find($id);

        return view('actividad.show', compact('actividad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividad = Actividad::find($id);

        return view('actividad.edit', compact('actividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Actividad $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        request()->validate(Actividad::$rules);

        $actividad->update($request->all());

        return redirect()->route('actividads.index')
            ->with('success', 'Actividad Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $actividad = Actividad::find($id)->delete();

        return redirect()->route('actividads.index')
            ->with('success', 'Actividad se eliminó exitosamente');
    }
}
