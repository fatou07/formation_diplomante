<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormateursTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'formateurs';

    /**
     * Run the migrations.
     * @table formateurs
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idformateurs');
            $table->string('nom', 20)->nullable();
            $table->string('prenom', 20)->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('lieu_naissance', 45)->nullable();
            $table->float('cni')->nullable();
            $table->string('services', 20)->nullable();
            $table->string('diplomes', 20)->nullable();
            $table->string('niveaux', 20)->nullable();
            $table->unsignedInteger('matricule');
            $table->double('telephone');
            $table->integer('services_idservices')->unsigned();

            $table->index(["services_idservices"], 'fk_formateurs_services1_idx');


            $table->foreign('services_idservices', 'fk_formateurs_services1_idx')
                ->references('idservices')->on('services')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
