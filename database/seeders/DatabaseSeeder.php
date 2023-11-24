<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Producto;
use App\Models\Supervisione;
use App\Models\Bascula;
use App\Models\Bodega;
use App\Models\Operadore;
use App\Models\Ciudade;
use App\Models\Actividade;
use App\Models\Calificaraccidente;
use App\Models\Calificardisponibilidade;
use App\Models\Calificarentrega;
use App\Models\Transporte;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {       
        

        User::factory()->create([
            'name' => 'Gabriel Fernando Valencia Estrella',
            'email' => 'gf.valencia@gmail.com',
            'password' => bcrypt('password'),
            
        ]);
        
        User::factory(19)->create();
        Supervisione::factory(3)->create();
        Bascula::factory(4)->create();
        Bodega::factory(5)->create();
        Operadore::factory(5)->create();
        Producto::factory(5)->create();
        Ciudade::factory()->create(
            [
            'name' => 'Cali',
            ]
        );
        Ciudade::factory()->create(
            [
            'name' => 'Buga',
            ]
        );
        Ciudade::factory()->create(
            [
            'name' => 'Tulua',
            ]
        );
        Ciudade::factory()->create(
            [
            'name' => 'Palmira',
            ]
        );
        Actividade::factory(20)->create();
        Calificarentrega::factory()->create(
            [
            'valoracion' => 'Excelente',
            ]
        );
        Calificarentrega::factory()->create(
            [
            'valoracion' => 'Bueno',
            ]
        );
        Calificarentrega::factory()->create(
            [
            'valoracion' => 'Regular',
            ]
        );
        Calificarentrega::factory()->create(
            [
            'valoracion' => 'Malo',
            ]
        );
        Calificardisponibilidade::factory()->create(
            [
            'valoracion' => 'Excelente',
            ]
        );
        Calificardisponibilidade::factory()->create(
            [
            'valoracion' => 'Bueno',
            ]
        );
        Calificardisponibilidade::factory()->create(
            [
            'valoracion' => 'Regular',
            ]
        );
        Calificardisponibilidade::factory()->create(
            [
            'valoracion' => 'Malo',
            ]
        );
        Calificaraccidente::factory()->create(
            [
            'valoracion' => 'Excelente',
            ]
        );
        Calificaraccidente::factory()->create(
            [
            'valoracion' => 'Bueno',
            ]
        );
        Calificaraccidente::factory()->create(
            [
            'valoracion' => 'Regular',
            ]
        );
        Calificaraccidente::factory()->create(
            [
            'valoracion' => 'Malo',
            ]
        );
        Transporte::factory(15)->create();            

        $this->call([
            DashboardTableSeeder::class,
        ]);
    }
}
