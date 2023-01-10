<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class HandleChartController extends Controller
{
    public function showCharts(){
        return('welcome');
    }
    // public function handleChart()
    // {
    //     $userData = User::select(DB::raw("COUNT(*) as count"))
    //                 ->whereYear('created_at', date('Y'))
    //                 ->groupBy(DB::raw("Month(created_at)"))
    //                 ->pluck('count');
          
    //     return view('chartView', compact('userData'));
    // }
    public function getRegiones(){
        $data = DB::table('regiones')->get();
        return view('welcome',compact('regiones'));
    }
    public function getCasosCovidByMonth(){

    }
    public function getAllCasosCovid(){
        $data = DB::table('regiones')
                ->select('regiones.nombreRegion','casos_covid.numeroDeCasosAsintomaticos','casos_covid.numeroDeFallecidos','casos_covid.mesDelReporte')
                ->join('casos_covid','regiones.idRegion','=','casos_covid.idRegion')
                ->groupBy('casos_covid.mesDelReporte','casos_covid.idRegion','regiones.nombreRegion','casos_covid.numeroDeCasosAsintomaticos','casos_covid.numeroDeFallecidos','casos_covid.mesDelReporte')
                ->orderBY('casos_covid.mesDelReporte','asc')
                ->orderBy('casos_covid.idRegion','asc')
                ->having('casos_covid.mesDelReporte','=','Marzo')
                ->get();
                return view('welcome',compact('data'));
    }
    public function setTable(){
        return view('tabla');
    }
}
