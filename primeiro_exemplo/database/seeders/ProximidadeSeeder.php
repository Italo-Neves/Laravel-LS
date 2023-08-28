<?php

namespace Database\Seeders;

use App\Models\Proximidade;
use Illuminate\Database\Seeder;

class ProximidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proximidade::created(['nome'=>'Academia']);
        Proximidade::created(['nome'=>'Banco']);
        Proximidade::created(['nome'=>'Bombeiro']);
        Proximidade::created(['nome'=>'Cinema']);
        Proximidade::created(['nome'=>'Clínica Médica']);
        Proximidade::created(['nome'=>'Correios']);
        Proximidade::created(['nome'=>'Escola']);
        Proximidade::created(['nome'=>'Estacionamento']);
        Proximidade::created(['nome'=>'Farmácia']);
        Proximidade::created(['nome'=>'Hospital']);
        Proximidade::created(['nome'=>'Padaria']);
        Proximidade::created(['nome'=>'Parque']);
        Proximidade::created(['nome'=>'Ponto de Ônibus']);
        Proximidade::created(['nome'=>'Ponto de Táxi']);
        Proximidade::created(['nome'=>'Posto de Combustível']);
        Proximidade::created(['nome'=>'Posto Policial']);
        Proximidade::created(['nome'=>'Restaurante']);
        Proximidade::created(['nome'=>'Shopping']);
        Proximidade::created(['nome'=>'Super Mercado']);
        Proximidade::created(['nome'=>'Livraria']);
    }
}
