<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecnologyes = ["Laravel","Php","Vuejs","Html","Css","Sass","Bootstrap"];
        foreach($tecnologyes as $tecnology){
             
            $Newtecnology = new Tecnology();
            $Newtecnology->name ="#" . $tecnology;
            $Newtecnology->save();
        }
        
    }
}
