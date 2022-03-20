<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use App\Models\Huerto;
use App\Models\Planta;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * Class HuertoController
 * @package App\Http\Controllers
 */
class HuertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $huertos = Huerto::join('plantas', 'huertos.id_plan', '=', 'plantas.id_plan')
        ->join('proyectos', 'proyectos.id_proy', '=', 'huertos.id_proy')
            ->join('guias', 'guias.id_guia', '=', 'huertos.id_guia')
            ->join('expertos', 'expertos.id_expe', '=', 'guias.id_expe')
            ->join('users', 'users.id', '=', 'expertos.id_usuario')
            ->select('guias.id_guia', 'users.name','huertos.*', 'plantas.nomb_plan','proyectos.nomb_proy')->paginate();
        

        return view('huerto.index', compact('huertos'))
            ->with('i', (request()->input('page', 1) - 1) * $huertos->perPage());
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
        $proyecto=Proyecto::join('clientes','clientes.id_clie','=','proyectos.id_clie')
        ->select('id_proy','nomb_proy')
        ->where('clientes.id_usuario',Auth::user()->id)->get();
        $planta=Planta::select('id_plan','nomb_plan')->get();

        $huerto = new Huerto();
        return view('huerto.create', compact('huerto','proyecto','guia','planta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Huerto::$rules);

        $huerto = Huerto::create($request->all());

        return redirect()->route('huertos.index')
            ->with('success', 'Huerto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $huerto = Huerto::find($id);

        return view('huerto.show', compact('huerto'));
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
        $proyecto=Proyecto::select('id_proy','nomb_proy')->get();
        $planta=Planta::select('id_plan','nomb_plan')->get();

        $huerto = Huerto::find($id);

        return view('huerto.edit', compact('huerto','guia','proyecto','planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Huerto $huerto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Huerto $huerto)
    {
        request()->validate(Huerto::$rules);

        $huerto->update($request->all());

        return redirect()->route('huertos.index')
            ->with('success', 'Huerto Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $huerto = Huerto::find($id)->delete();

        return redirect()->route('huertos.index')
            ->with('success', 'Huerto se eliminó exitosamente');
    }
}
