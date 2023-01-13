<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Region;
use App\Models\Caso_covid;

class HandleChartController extends Controller
{
    public function getDataFromBD(){
        
        $data = DB::table('regiones')
        ->select('regiones.nombreRegion',DB::raw('SUM(casos_covid.numeroDeCasosAsintomaticos) as numeroDeCasosAsintomaticos'),DB::RAW('SUM(casos_covid.numeroDeFallecidos) as numeroDeFallecidos'),DB::RAW('SUM(casos_covid.numeroDeCasosMasculinos) as numeroDeCasosMasculinos'),DB::RAW('SUM(casos_covid.numeroDeCasosFemeninos) as numeroDeCasosFemeninos'))
        ->join('casos_covid','regiones.idRegion','=','casos_covid.idRegion')
        ->groupBy('casos_covid.idRegion','regiones.nombreRegion')
        ->orderBy('casos_covid.idRegion','asc')
        ->get();
         //Arreglo que almacenara con clave las regiones con sus respectivos reportes de acuerdo al mes ;
         $dataTable=[];
         foreach($data as $value){
             //Se almacenan todos los reportes de la region actualmente del reporte segun la fecha del reporte
             $casosReportados = [
                 "numeroDeCasosAsintomaticos"=>$value->numeroDeCasosAsintomaticos,
                 "numeroDeFallecidos"=>$value->numeroDeFallecidos ,
                 "numeroDeCasosMasculinos"=>$value->numeroDeCasosMasculinos ,
                 "numeroDeCasosFemeninos"=>$value->numeroDeCasosFemeninos 
             ];
             $dataTable[$value->nombreRegion] = $casosReportados ;
             $dataTable[$value->nombreRegion]["mesDelReporte"]="Marzo, Abril y Mayo";
         };
        return $dataTable ;
    }
    public function getAllCasosCovid(Request $request){
        $dataTable = $this->getDataFromBD();
        $dataChart = $this->allDataForChart();
        $arrayFiltros=$this->comprobarFiltros($request);
        //Se verifica si hay filtros presentes en la query para filtrar los datos.
        if(count(array_keys($arrayFiltros))>0) {
            $dataTable= $this->datosFiltrados($arrayFiltros);
           
        }
        
        
        return view('chartView',compact('dataTable','dataChart'));
    }
    public function allDataForChart(){
        $data = DB::table('regiones')
        ->select(DB::raw('SUM(casos_covid.numeroDeCasosAsintomaticos) as numeroDeCasosAsintomaticos'),DB::RAW('SUM(casos_covid.numeroDeFallecidos) as numeroDeFallecidos'),DB::RAW('SUM(casos_covid.numeroDeCasosMasculinos) as numeroDeCasosMasculinos'),DB::RAW('SUM(casos_covid.numeroDeCasosFemeninos) as numeroDeCasosFemeninos',DB::RAW('Month(caso_covid.mesDelReporte)')))
        ->join('casos_covid','regiones.idRegion','=','casos_covid.idRegion')
        ->groupBy('casos_covid.mesDelReporte')
        ->get();
        
        return $data;
    }
    public function comprobarFiltros($request){
        $mes = $request->input('mes');
        $genero = $request->input('sexo');
        $region=$request->input('region');

        $filtros= [];

        if($request->filled('mes')){
            $filtros["mes"]=$mes;
        };
        if($request->filled('genero')){
            $filtros["genero"]=$genero;
        };
        if($request->filled('region')){
            $filtros["region"]=$region;
        };
        return $filtros;
    }
    public function datosFiltrados($filtros){
        $nombreRegiones=['Arica y Parinacota','Tarapaca','Antofagasta','Atacama','Coquimbo','Valparaiso','Metropolitana','O higgins','Maule','Ñuble','Bio Bio','Araucania','Los Rios','Los Lagos','Aysen','Magallanes'];
        
        foreach($filtros as $tipoDeFiltro){
            if(strcmp($tipoDeFiltro,'region')==0){
                $datos =DB::table('regiones')
                ->select('regiones.nombreRegion',DB::raw('SUM(casos_covid.numeroDeCasosAsintomaticos) as numeroDeCasosAsintomaticos'),DB::RAW('SUM(casos_covid.numeroDeFallecidos) as numeroDeFallecidos'),DB::RAW('SUM(casos_covid.numeroDeCasosMasculinos) as numeroDeCasosMasculinos'),DB::RAW('SUM(casos_covid.numeroDeCasosFemeninos) as numeroDeCasosFemeninos'))
                ->join('casos_covid','regiones.idRegion','=','casos_covid.idRegion')
                ->groupBy('casos_covid.idRegion','regiones.nombreRegion')
                ->having('casos_covid.nombreRegion','=',$tipoDeFiltro["region"])
                ->orderBy('casos_covid.idRegion','asc')
                ->get();
                 //Arreglo que almacenara con clave las regiones con sus respectivos reportes de acuerdo al mes ;
                 $dataTable=[];
                 foreach($datos as $value){
                     //Se almacenan todos los reportes de la region actualmente del reporte segun la fecha del reporte
                     $casosReportados = [
                         "numeroDeCasosAsintomaticos"=>$value->numeroDeCasosAsintomaticos,
                         "numeroDeFallecidos"=>$value->numeroDeFallecidos ,
                         "numeroDeCasosMasculinos"=>$value->numeroDeCasosMasculinos ,
                         "numeroDeCasosFemeninos"=>$value->numeroDeCasosFemeninos 
                     ];
                     $dataTable[$value->nombreRegion] = $casosReportados ;
                     $dataTable[$value->nombreRegion]["mesDelReporte"]=$nombreRegiones[array_search($tipoDeFiltro["mes"],$nombreRegiones)-1];
                 };
                return $dataTable;
            };
        }
        

    }
}

