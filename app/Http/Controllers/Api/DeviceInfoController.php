<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers\Api;
use datatables;
use App\Models\Huerto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


/**
 * Class AlertaController
 * @package App\Http\Controllers
 */
class DeviceInfoController extends Controller
{

    public function getInfoEsp()
    {
        $valor=Auth::user()->id;
        //$valor=auth('api')->user();
        //return $valor;
        //$momi=['na'=>'melody'];
        //return $valor;//$momi;
        $query=Huerto::join('proyectos','proyectos.id_Proy','=','huertos.id_proy')
        ->join('plantas','plantas.id_plan','=','huertos.id_plan')
        ->join('clientes','clientes.id_clie','=','proyectos.id_clie')
        ->join('users','users.id','=','clientes.id_usuario')
        ->join('parametros','parametros.id_plan','=','plantas.id_plan')
        ->join('medidas','medidas.id_medi','=','parametros.id_medi')
        ->where('clientes.id_usuario','=',$valor)
        ->where('medidas.id_medi','=','8')
        ->orwhere('medidas.id_medi','=','9')
        ->orwhere('medidas.id_medi','=','14')
        ->orwhere('medidas.id_medi','=','16')
        ->select(
            'plantas.nomb_plan',
            'medidas.nomb_medi',
            'parametros.cant_param'
        )
        ->orderBy('id_huer', 'desc')
        ->take(4)
        ->get();
        //->paginate(4);
        $idplan=0;$aux1="";$aux2="";$aux3="";$aux4="";$aux5="";
        $plantas=array();$ida=0;      
        foreach ($query as $key => $value) {
            
            $aux1=$value->nomb_plan;
            
                if($value->nomb_medi=="temperatura máxima ideal")
                $aux2=$value->cant_param;
                if($value->nomb_medi=="temperatura mínima ideal")
                $aux3=$value->cant_param;
                if($value->nomb_medi=="Humedad Suelo")
                $aux4=$value->cant_param;
                if($value->nomb_medi=="Luz Solar")
                $aux5=$value->cant_param;
            
            $idplan++;
            if($idplan==4){
                $plantas[$ida]['nomb_plan']=$aux1;
                $plantas[$ida]['temp_max']=$aux2;
                $plantas[$ida]['temp_min']=$aux3;
                $plantas[$ida]['hum_soil']=$aux4;
                $plantas[$ida]['luz_solar']=$aux5;
                $ida++;
                $idplan=0;
            }
        }
        return $plantas;

        /*$query = Reciclaje::join('materials', 'materials.id_material', '=', 'reciclajes.id_material')
            ->join('clientes', 'clientes.id_cliente', '=', 'reciclajes.id_cliente')
            ->join('users', 'clientes.id_usuario', '=', 'users.id')
            ->join('dispositivos', 'dispositivos.id_dispo', '=', 'reciclajes.id_dispo')
            ->join('clie_disps', 'clie_disps.id_dispo', '=', 'dispositivos.id_dispo')
            ->where('clientes.id_usuario', '=', $valor)
            ->select(
                'reciclajes.id_reciclaje',
                'materials.nomb_mate',
                'users.name',
                'clie_disps.nomb_clie_disp',
                'reciclajes.peso_reci',
                'reciclajes.ptos_reci',
                'reciclajes.fech_reci'
            )->get();
        //$data=Reciclaje::latest()->get();
        //return Datatables::of($data)
        return datatables($query)
        //->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            //->rawColumns(['action'])
            //->make(true);
            ->make(true);*/
    }
}
