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
    public function showRegiones(){
        $regiones = DB::table('regiones')->get();
        return view('welcome',compact('regiones'));
    }
}
