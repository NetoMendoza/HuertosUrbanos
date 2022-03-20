<?php

namespace App\Http\Controllers;

use App\Models\Medida;
use Illuminate\Http\Request;

/**
 * Class MedidaController
 * @package App\Http\Controllers
 */
class MedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medidas = Medida::paginate();

        return view('medida.index', compact('medidas'))
            ->with('i', (request()->input('page', 1) - 1) * $medidas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $medida = new Medida();
        return view('medida.create', compact('medida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medida::$rules);
        $request->validate([
            'nomb_medi' => 'required|string|min:3|max:70|unique:medidas',
            'unid_medi' => 'required|string|min:1|max:50'
        ]);
        $medida = Medida::create($request->all());

        return redirect()->route('medidas.index')
            ->with('success', 'Medida creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medida = Medida::find($id);

        return view('medida.show', compact('medida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medida = Medida::find($id);

        return view('medida.edit', compact('medida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medida $medida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medida $medida)
    {
        request()->validate(Medida::$rules);
        $request->validate([
            'nomb_medi' => 'required|string|min:3|max:70|unique:medidas',
            'unid_medi' => 'required|string|min:1|max:50'
        ]);
        $medida->update($request->all());

        return redirect()->route('medidas.index')
            ->with('success', 'Medida Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medida = Medida::find($id)->delete();

        return redirect()->route('medidas.index')
            ->with('success', 'Medida se eliminó exitosamente');
    }
}
