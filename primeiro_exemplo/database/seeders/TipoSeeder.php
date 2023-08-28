<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo;
class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::created(['nome'=>'Apartamento']);
        Tipo::created(['nome'=>'Casa']);
        Tipo::created(['nome'=>'Ponto Comercial']);
    }
}
