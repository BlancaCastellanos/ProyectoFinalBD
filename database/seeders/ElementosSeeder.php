<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElementosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elementos')->insert([
            'codigo' => '189060',
            'descripcion' => 'Computadora',
            'cantidad' => '20',
            'precio' => '25999'
        ]);
    }
}
