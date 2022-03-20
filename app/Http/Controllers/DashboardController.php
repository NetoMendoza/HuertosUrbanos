<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        
        $proyectos = Proyecto::join('clientes','clientes.id_clie','=','proyectos.id_clie')
        ->join('users','users.id','=','clientes.id_usuario')
        ->select('proyectos.*','users.name')->get();

        $numeroproyecto=Proyecto::select('id_proy')->get()->count();
        //$numeroproyecto=Proyecto::count();
        $numeroguia=Guia::select('id_guia')->get()->count();
        //$numeroguia=Guia::count();
        if (Auth::user()->role_id ==1) {
            //$dispositivos = DispositivoController::showUnlinked();
            //return view('admin.dashboard', compact('dispositivos'))->with('i', (request()->input('page', 1) - 1) * $dispositivos->perPage());
            //return view('admin.dashboard');
        
            return view('cliente.home',compact('proyectos','numeroproyecto','numeroguia'));
        } elseif (Auth::user()->role_id ==2) {
            return view('cliente.home',compact('proyectos','numeroproyecto','numeroguia'));
        } elseif (Auth::user()->role_id ==3) {
            //return view('experto.dashboard');
            return view('cliente.home',compact('proyectos','numeroproyecto','numeroguia'));
        }elseif (Auth::user()->role_id ==4) {
            //return view('proveedor.dashboard');
            return view('cliente.home',compact('proyectos','numeroproyecto','numeroguia'));
        }
    }

    public function profile()
    {
        return view('profile.show');
    }
}
