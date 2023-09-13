<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('rua', 100);
            $table->integer('numero');
            $table->string('complemento', 20)->nullable();
            $table->string('bairro', 100);

            $table->foreignId('imovel_id')->constrained('imoveis')->onDelete('cascade'); //Neste caso como como o nome da migrate gerada foi altareada precisamo inserir o nome da tabela na constrained
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
