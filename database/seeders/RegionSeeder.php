<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombreRegiones=['Arica y Parinacota','Tarapaca','Antofagasta','Atacama','Coquimbo','Valparaiso','Metropolitana','O higgins','Maule','Ñuble','Bio Bio','Araucania','Los Rios','Los Lagos','Aysen','Magallanes'];
        foreach($nombreRegiones as $nombreRegion){
            Region::create([
                "nombreRegion"=>$nombreRegion
            ]);
        }
    }
}
