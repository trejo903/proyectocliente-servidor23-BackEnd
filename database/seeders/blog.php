<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class blog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            'titulo' => 'Seguridad en tus compras',
            'imagen' => 'imagen5',
            'descripcion'=>'Para realizar una compra segura, verifica que el vendedor tenga la palomita de verificacion',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('blogs')->insert([
            'titulo' => 'El que se enoja pierde',
            'imagen' => 'imagen4',
            'descripcion'=>'Recuerda, lo que pasa en el videojuego se queda en el videojuego',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('blogs')->insert([
            'titulo' => 'Videojuegos ¿Son buenos o malos?',
            'imagen' => 'imagen6',
            'descripcion'=>'Es criterio de cada persona, pero los videojuegos pueden ayudar a desarrollar habilidades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        
    }
}
