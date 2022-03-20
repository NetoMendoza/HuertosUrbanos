<?php

namespace App\Http\Controllers;

use App\Models\Experto;
use Illuminate\Http\Request;

/**
 * Class ExpertoController
 * @package App\Http\Controllers
 */
class ExpertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expertos = Experto::paginate();

        return view('experto.index', compact('expertos'))
            ->with('i', (request()->input('page', 1) - 1) * $expertos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $experto = new Experto();
        return view('experto.create', compact('experto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Experto::$rules);

        $experto = Experto::create($request->all());

        return redirect()->route('expertos.index')
            ->with('success', 'Experto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $experto = Experto::find($id);

        return view('experto.show', compact('experto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $experto = Experto::find($id);

        return view('experto.edit', compact('experto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Experto $experto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experto $experto)
    {
        request()->validate(Experto::$rules);

        $experto->update($request->all());

        return redirect()->route('expertos.index')
            ->with('success', 'Experto Se actualizó exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $experto = Experto::find($id)->delete();

        return redirect()->route('expertos.index')
            ->with('success', 'Experto se eliminó exitosamente');
    }
}
