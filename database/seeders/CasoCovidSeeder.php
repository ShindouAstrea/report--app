<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Caso_covid;

class CasoCovidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reportes=[
            ["idRegion"=>1,"numeroDeCasosAsintomaticos"=> 308,"numeroDeFallecidos"=> 1, "numeroDeCasosMasculinos"=>185,"numeroDeCasosFemeninos"=> 123, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>2,"numeroDeCasosAsintomaticos"=> 272,"numeroDeFallecidos"=> 60,"numeroDeCasosMasculinos"=> 163,"numeroDeCasosFemeninos"=> 109, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>3,"numeroDeCasosAsintomaticos"=> 740,"numeroDeFallecidos"=> 61,"numeroDeCasosMasculinos"=> 444,"numeroDeCasosFemeninos"=> 296, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>4,"numeroDeCasosAsintomaticos"=> 67,"numeroDeFallecidos"=> 8, "numeroDeCasosMasculinos"=>40,"numeroDeCasosFemeninos"=> 27, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>5,"numeroDeCasosAsintomaticos"=> 88,"numeroDeFallecidos"=> 10,"numeroDeCasosMasculinos"=> 53,"numeroDeCasosFemeninos"=> 35, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>6,"numeroDeCasosAsintomaticos"=> 638,"numeroDeFallecidos"=> 24,"numeroDeCasosMasculinos"=> 383,"numeroDeCasosFemeninos"=> 255, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>7,"numeroDeCasosAsintomaticos"=> 12656,"numeroDeFallecidos"=> 995,"numeroDeCasosMasculinos"=> 7594,"numeroDeCasosFemeninos"=> 5062, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>8,"numeroDeCasosAsintomaticos"=> 125,"numeroDeFallecidos"=> 5,"numeroDeCasosMasculinos"=> 75,"numeroDeCasosFemeninos"=> 50, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>9,"numeroDeCasosAsintomaticos"=> 397,"numeroDeFallecidos"=> 1,"numeroDeCasosMasculinos"=> 238,"numeroDeCasosFemeninos"=> 159, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>10,"numeroDeCasosAsintomaticos"=> 786,"numeroDeFallecidos"=> 10,"numeroDeCasosMasculinos"=> 472,"numeroDeCasosFemeninos"=> 314, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>11,"numeroDeCasosAsintomaticos"=> 759,"numeroDeFallecidos"=> 8,"numeroDeCasosMasculinos"=> 455,"numeroDeCasosFemeninos"=> 304, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>12,"numeroDeCasosAsintomaticos"=> 1328,"numeroDeFallecidos"=> 14,"numeroDeCasosMasculinos"=> 797,"numeroDeCasosFemeninos"=> 531, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>13,"numeroDeCasosAsintomaticos"=> 198,"numeroDeFallecidos"=> 2,"numeroDeCasosMasculinos"=> 119,"numeroDeCasosFemeninos"=> 70, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>14,"numeroDeCasosAsintomaticos"=> 517,"numeroDeFallecidos"=> 4,"numeroDeCasosMasculinos"=> 310,"numeroDeCasosFemeninos"=> 207, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>15,"numeroDeCasosAsintomaticos"=> 7,"numeroDeFallecidos"=> 0,"numeroDeCasosMasculinos"=> 4,"numeroDeCasosFemeninos"=> 3, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>16,"numeroDeCasosAsintomaticos"=> 777,"numeroDeFallecidos"=> 25,"numeroDeCasosMasculinos"=> 466,"numeroDeCasosFemeninos"=> 311, "mesDelReporte"=>'2022-05-31'],
            ["idRegion"=>1,"numeroDeCasosAsintomaticos"=> 185,"numeroDeFallecidos"=> 1,"numeroDeCasosMasculinos"=> 111, "numeroDeCasosFemeninos"=>74, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>2,"numeroDeCasosAsintomaticos"=> 163,"numeroDeFallecidos"=> 36,"numeroDeCasosMasculinos"=> 98, "numeroDeCasosFemeninos"=>65, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>3,"numeroDeCasosAsintomaticos"=> 444,"numeroDeFallecidos"=> 37,"numeroDeCasosMasculinos"=> 266,"numeroDeCasosFemeninos"=> 178, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>4,"numeroDeCasosAsintomaticos"=> 40,"numeroDeFallecidos"=> 5,"numeroDeCasosMasculinos"=> 24,"numeroDeCasosFemeninos"=> 16, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>5,"numeroDeCasosAsintomaticos"=> 53,"numeroDeFallecidos"=> 6,"numeroDeCasosMasculinos"=> 32,"numeroDeCasosFemeninos"=> 21, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>6,"numeroDeCasosAsintomaticos"=> 383,"numeroDeFallecidos"=> 14,"numeroDeCasosMasculinos"=> 230, "numeroDeCasosFemeninos"=>153, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>7,"numeroDeCasosAsintomaticos"=> 7594,"numeroDeFallecidos"=> 597,"numeroDeCasosMasculinos"=> 4556,"numeroDeCasosFemeninos"=> 3037, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>8,"numeroDeCasosAsintomaticos"=> 75,"numeroDeFallecidos"=> 3,"numeroDeCasosMasculinos"=> 45, "numeroDeCasosFemeninos"=>30, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>9,"numeroDeCasosAsintomaticos"=> 238,"numeroDeFallecidos"=> 1,"numeroDeCasosMasculinos"=> 143, "numeroDeCasosFemeninos"=>95, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>10,"numeroDeCasosAsintomaticos"=> 472,"numeroDeFallecidos"=> 6,"numeroDeCasosMasculinos"=> 283,"numeroDeCasosFemeninos"=> 189, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>11,"numeroDeCasosAsintomaticos"=> 455,"numeroDeFallecidos"=> 5,"numeroDeCasosMasculinos"=> 273,"numeroDeCasosFemeninos"=> 182, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>12,"numeroDeCasosAsintomaticos"=> 979,"numeroDeFallecidos"=> 8,"numeroDeCasosMasculinos"=> 478, "numeroDeCasosFemeninos"=>319, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>13,"numeroDeCasosAsintomaticos"=> 119,"numeroDeFallecidos"=> 1,"numeroDeCasosMasculinos"=> 71, "numeroDeCasosFemeninos"=>48, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>14,"numeroDeCasosAsintomaticos"=> 310,"numeroDeFallecidos"=> 2,"numeroDeCasosMasculinos"=> 186, "numeroDeCasosFemeninos"=>124, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>15,"numeroDeCasosAsintomaticos"=> 4,"numeroDeFallecidos"=> 0,"numeroDeCasosMasculinos"=> 3, "numeroDeCasosFemeninos"=>2, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>16,"numeroDeCasosAsintomaticos"=> 466,"numeroDeFallecidos"=> 15,"numeroDeCasosMasculinos"=> 280, "numeroDeCasosFemeninos"=>186, "mesDelReporte"=>'2022-03-31'],
            ["idRegion"=>1,"numeroDeCasosAsintomaticos"=> 246,"numeroDeFallecidos"=> 1,"numeroDeCasosMasculinos"=> 148, "numeroDeCasosFemeninos"=>99, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>2,"numeroDeCasosAsintomaticos"=> 218,"numeroDeFallecidos"=> 48,"numeroDeCasosMasculinos"=> 131, "numeroDeCasosFemeninos"=>87, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>3,"numeroDeCasosAsintomaticos"=> 592,"numeroDeFallecidos"=> 49,"numeroDeCasosMasculinos"=> 355, "numeroDeCasosFemeninos"=>237, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>4,"numeroDeCasosAsintomaticos"=> 54,"numeroDeFallecidos"=> 6,"numeroDeCasosMasculinos"=> 32, "numeroDeCasosFemeninos"=>21, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>5,"numeroDeCasosAsintomaticos"=> 70,"numeroDeFallecidos"=> 8,"numeroDeCasosMasculinos"=> 42, "numeroDeCasosFemeninos"=>28, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>6,"numeroDeCasosAsintomaticos"=> 510,"numeroDeFallecidos"=> 19,"numeroDeCasosMasculinos"=> 306,"numeroDeCasosFemeninos"=> 204, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>7,"numeroDeCasosAsintomaticos"=> 10125,"numeroDeFallecidos"=> 796,"numeroDeCasosMasculinos"=> 6075,"numeroDeCasosFemeninos"=> 4050, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>8,"numeroDeCasosAsintomaticos"=> 100,"numeroDeFallecidos"=> 4,"numeroDeCasosMasculinos"=> 60,"numeroDeCasosFemeninos"=> 40, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>9,"numeroDeCasosAsintomaticos"=> 318,"numeroDeFallecidos"=> 1,"numeroDeCasosMasculinos"=> 191,"numeroDeCasosFemeninos"=> 127, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>10,"numeroDeCasosAsintomaticos"=> 629,"numeroDeFallecidos"=> 8,"numeroDeCasosMasculinos"=> 377,"numeroDeCasosFemeninos"=> 259, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>11,"numeroDeCasosAsintomaticos"=> 607,"numeroDeFallecidos"=> 6,"numeroDeCasosMasculinos"=> 364,"numeroDeCasosFemeninos"=> 243, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>12,"numeroDeCasosAsintomaticos"=> 1062,"numeroDeFallecidos"=> 11,"numeroDeCasosMasculinos"=> 637, "numeroDeCasosFemeninos"=>425, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>13,"numeroDeCasosAsintomaticos"=> 158,"numeroDeFallecidos"=> 2,"numeroDeCasosMasculinos"=> 95, "numeroDeCasosFemeninos"=>63, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>14,"numeroDeCasosAsintomaticos"=> 414,"numeroDeFallecidos"=> 3,"numeroDeCasosMasculinos"=> 248, "numeroDeCasosFemeninos"=>165, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>15,"numeroDeCasosAsintomaticos"=> 6,"numeroDeFallecidos"=> 0,"numeroDeCasosMasculinos"=> 3,"numeroDeCasosFemeninos"=> 2, "mesDelReporte"=>'2022-04-30'],
            ["idRegion"=>16,"numeroDeCasosAsintomaticos"=> 622,"numeroDeFallecidos"=> 20,"numeroDeCasosMasculinos"=> 373,"numeroDeCasosFemeninos"=> 249,"mesDelReporte"=>'2022-04-30']
        ];
        foreach($reportes as $reporte){
            Caso_covid::create([
                "idRegion"=>$reporte["idRegion"],
                "numeroDeCasosAsintomaticos"=>$reporte["numeroDeCasosAsintomaticos"],
                "numeroDeFallecidos"=>$reporte["numeroDeFallecidos"],
                "numeroDeCasosMasculinos"=>$reporte["numeroDeCasosMasculinos"],
                "numeroDeCasosFemeninos"=>$reporte["numeroDeCasosFemeninos"],
                "mesDelReporte"=>$reporte["mesDelReporte"]
            ]);
        }
        
    }
}
