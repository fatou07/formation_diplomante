<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialitesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'specialites';

    /**
     * Run the migrations.
     * @table specialites
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idspecialites');
            $table->char('uuid', 36)->nullable();
            $table->string('nom', 45)->nullable();
            $table->integer('formateurs_idformateurs')->unsigned();

            $table->index(["formateurs_idformateurs"], 'fk_specialites_formateurs1_idx');


            $table->foreign('formateurs_idformateurs', 'fk_specialites_formateurs1_idx')
                ->references('idformateurs')->on('formateurs')
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
