<?php

namespace App\Http\Controllers;

use App\Models\Suelo;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class SueloController
 * @package App\Http\Controllers
 */
class SueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suelos = Suelo::join('proyectos','proyectos.id_proy','=','suelos.id_proy')
        ->join('clientes','clientes.id_clie','=','proyectos.id_clie')
        ->join('users','users.id','=','clientes.id_usuario')
        ->where('users.id',Auth::user()->id)
        ->select('suelos.*','proyectos.nomb_proy')->paginate();
        

        return view('suelo.index', compact('suelos'))
            ->with('i', (request()->input('page', 1) - 1) * $suelos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyecto=Proyecto::join('clientes','clientes.id_clie','=','proyectos.id_clie')
        ->join('users','users.id','=','clientes.id_usuario')
        ->where('users.id',Auth::user()->id)
        ->select('id_proy','nomb_proy')->get();
       
       $suelo = new Suelo();
       return view('suelo.create', compact('suelo','proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Suelo::$rules);

        $suelo = Suelo::create($request->all());

        return redirect()->route('suelos.index')
            ->with('success', 'Suelo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suelo = Suelo::find($id);

        return view('suelo.show', compact('suelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto=Proyecto::join('clientes','clientes.id_clie','=','proyectos.id_clie')
        ->join('users','users.id','=','clientes.id_usuario')
        ->where('users.id',Auth::user()->id)
        ->select('id_proy','nomb_proy')->get();
        
        $suelo = Suelo::find($id);

        return view('suelo.edit', compact('suelo','proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Suelo $suelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suelo $suelo)
    {
        request()->validate(Suelo::$rules);

        $suelo->update($request->all());

        return redirect()->route('suelos.index')
            ->with('success', 'Suelo Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $suelo = Suelo::find($id)->delete();

        return redirect()->route('suelos.index')
            ->with('success', 'Suelo se eliminó exitosamente');
    }
}
