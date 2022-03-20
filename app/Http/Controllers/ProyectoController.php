<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProyectoController
 * @package App\Http\Controllers
 */
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::join('clientes','clientes.id_clie','=','proyectos.id_clie')
        ->join('users','users.id','=','clientes.id_usuario')
        ->select('proyectos.*','users.name')->paginate();
        
        return view('proyecto.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    public function wizardProyecto(){
        return view('proyecto.wizard');
    }

    public function validarWizard(Request $request){
        //$request->valor1;
        
        $vector=array("x"=>"Talisman","y"=>"Boludo");
        $vector["x"].=$request->nomb_proy;
        //$vector["y"].=$request->valor2;
        //echo json_encode($vector);
        return response()->json($vector);
        //return response()->json(['success'=>'Added new records.']);
    }

    public function misProyectos(){
        $proyectos = Proyecto::join('clientes','clientes.id_clie','=','proyectos.id_clie')
        ->join('users','users.id','=','clientes.id_usuario')
        ->where('id_usuario',Auth::user()->id)
        ->select('proyectos.*','users.name')->paginate();
        return view('proyecto.misproyectos', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function registroProyecto()
    {
        $cliente=Cliente::join('users','users.id','=','clientes.id_usuario')
        ->select('clientes.id_clie','users.name')
        ->where('users.id',Auth::user()->id)->get();

        $proyecto = new Proyecto();
        return view('proyecto.registro-proyecto', compact('proyecto','cliente'));
    }

    public function validarNuevoProy(Request $request)
    {
     dd($request->firstname);
        //   $proyecto = new Proyecto();
     //   return view('proyecto.registro-proyecto', compact('proyecto'));
    }
    public function create()
    {
        $cliente=Cliente::join('users','users.id','=','clientes.id_usuario')
        ->select('clientes.id_clie','users.name')->get();

        $proyecto = new Proyecto();
        return view('proyecto.create', compact('proyecto','cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Proyecto::$rules);

        $proyecto = Proyecto::create($request->all());

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto creado exitosamente.');
    }

    public function store2(Request $request)
    {
        request()->validate(Proyecto::$rules);

        $proyecto = Proyecto::create($request->all());

        return redirect()->route('misproyectos')
            ->with('success', 'Proyecto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        
        $cliente=Cliente::join('users','users.id','=','clientes.id_usuario')
        ->select('clientes.id_clie','users.name')->get();

        return view('proyecto.edit', compact('proyecto','cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proyecto $proyecto
     * @return \Illuminate\Http\Response
     */


    public function update2(Request $request, Proyecto $proyecto)
    {
        request()->validate(Proyecto::$rules);

        $proyecto->update($request->all());

        return redirect()->route('misproyectos')
            ->with('success', 'Proyecto Se actualizó exitosamente');
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        request()->validate(Proyecto::$rules);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id)->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto se eliminó exitosamente');
    }

    public function destroy2($id)
    {
        $proyecto = Proyecto::find($id)->delete();

        return redirect()->route('misproyectos')
            ->with('success', 'Proyecto se eliminó exitosamente');
    }
}
