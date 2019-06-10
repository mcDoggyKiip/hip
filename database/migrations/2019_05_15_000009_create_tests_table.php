<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tests';

    /**
     * Run the migrations.
     * @table tests
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('test_type_id');
            $table->integer('attempt');
            $table->integer('week')->nullable();
            $table->unsignedInteger('course_id')->nullable();
            $table->timestamps();

            $table->index(["course_id"], 'fk_tests_courses_idx');

            $table->index(["test_type_id"], 'fk_tests_test_types_idx');


            $table->foreign('course_id', 'fk_tests_courses_idx')
                ->references('id')->on('courses')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('test_type_id', 'fk_tests_test_types_idx')
                ->references('id')->on('test_types')
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
