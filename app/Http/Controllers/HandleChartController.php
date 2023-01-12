<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HandleChartController extends Controller
{
    public function getAllCasosCovid(Request $request){
        $totalDataBD = DB::table('regiones')
        ->select('regiones.nombreRegion',DB::raw('SUM(casos_covid.numeroDeCasosAsintomaticos) as numeroDeCasosAsintomaticos'),DB::RAW('SUM(casos_covid.numeroDeFallecidos) as numeroDeFallecidos'),DB::RAW('SUM(casos_covid.numeroDeCasosMasculinos) as numeroDeCasosMasculinos'),DB::RAW('SUM(casos_covid.numeroDeCasosFemeninos) as numeroDeCasosFemeninos'))
        ->join('casos_covid','regiones.idRegion','=','casos_covid.idRegion')
        ->groupBy('casos_covid.idRegion','regiones.nombreRegion')
        ->orderBy('casos_covid.idRegion','asc')
        ->get();
        //Arreglo que almacenara con clave las regiones con sus respectivos reportes de acuerdo al mes ;
        $data=[];
        foreach($totalDataBD as $value){
            //Se almacenan todos los reportes de la region actualmente del reporte segun la fecha del reporte
            $casosReportados = [
                "numeroDeCasosAsintomaticos"=>$value->numeroDeCasosAsintomaticos,
                "numeroDeFallecidos"=>$value->numeroDeFallecidos ,
                "numeroDeCasosMasculinos"=>$value->numeroDeCasosMasculinos ,
                "numeroDeCasosFemeninos"=>$value->numeroDeCasosFemeninos 
            ];
            $data[$value->nombreRegion] = $casosReportados ;
        };
        $input = $request->all();
        return view('chartView',compact('data'));
    }
}
