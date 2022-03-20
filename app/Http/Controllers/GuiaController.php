<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use App\Models\Planta;
use App\Models\Experto;
use Illuminate\Http\Request;

/**
 * Class GuiaController
 * @package App\Http\Controllers
 */
class GuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $guias=Guia::join('plantas','plantas.id_plan','=','guias.id_plan')
        ->join('expertos','expertos.id_expe','=','guias.id_expe')
        ->join('users','users.id','=','expertos.id_usuario')
        ->select('plantas.nomb_plan','users.name','guias.*')->paginate();
        return view('guia.index', compact('guias'))
            ->with('i', (request()->input('page', 1) - 1) * $guias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planta=Planta::select('id_plan','nomb_plan')->get();
        $experto=Experto::join('users','users.id','=','expertos.id_usuario')
        ->select('users.name','expertos.*')->get();
        $guia = new Guia();
        return view('guia.create', compact('guia','planta','experto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Guia::$rules);

        $guia = Guia::create($request->all());

        return redirect()->route('guias.index')
            ->with('success', 'Guia creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guia = Guia::find($id);

        return view('guia.show', compact('guia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $planta=Planta::select('id_plan','nomb_plan')->get();
        $experto=Experto::join('users','users.id','=','expertos.id_usuario')
        ->select('users.name','expertos.*')->get();
        
        $guia = Guia::find($id);

        return view('guia.edit', compact('guia','planta','experto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Guia $guia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guia $guia)
    {
        request()->validate(Guia::$rules);

        $guia->update($request->all());

        return redirect()->route('guias.index')
            ->with('success', 'Guia Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $guia = Guia::find($id)->delete();

        return redirect()->route('guias.index')
            ->with('success', 'Guia se eliminó exitosamente');
    }
}
