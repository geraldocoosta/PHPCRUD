<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpregadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empregados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CPF');
            $table->string('NOME');
            $table->string('PROFISSAO')->nullable();
            $table->string('CARGO')->nullable();
            $table->date('DATANASC')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empregados');
    }
}
