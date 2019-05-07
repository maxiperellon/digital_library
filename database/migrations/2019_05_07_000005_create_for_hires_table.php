<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForHiresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'for_hires';

    /**
     * Run the migrations.
     * @table for_hires
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_students');
            $table->integer('id_books');
            $table->integer('id_users');

            $table->index(["id_books"], 'fk_for_hires_1_idx');

            $table->index(["id_students"], 'fk_for_hires_2_idx');

            $table->index(["id_users"], 'fk_for_hires_3_idx');


            $table->foreign('id_books', 'fk_for_hires_1_idx')
                ->references('id')->on('books')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_students', 'fk_for_hires_2_idx')
                ->references('id')->on('students')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_users', 'fk_for_hires_3_idx')
                ->references('id')->on('users')
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
