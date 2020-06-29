<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('admission_id')
                ->constrained('admissions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('faculty_id_1');
            $table->integer('faculty_id_2');
            $table->integer('faculty_id_3');
            $table->integer('combination_id_1');
            $table->integer('combination_id_2');
            $table->integer('combination_id_3');
            $table->integer('point_1_1');
            $table->integer('point_1_2');
            $table->integer('point_1_3');
            $table->integer('point_2_1');
            $table->integer('point_2_2');
            $table->integer('point_2_3');
            $table->integer('point_3_1');
            $table->integer('point_3_2');
            $table->integer('point_3_3');
            $table->integer('total_point_1');
            $table->integer('total_point_2');
            $table->integer('total_point_3');
            $table->integer('area');
            $table->integer('priority');

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
        Schema::dropIfExists('application_forms');
    }
}
