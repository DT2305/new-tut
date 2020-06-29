<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('admission_id')
                ->constrained('admissions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('faculty_id')
                ->constrained('faculties')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('combination_id')
                ->constrained('combinations')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('point_1')->default(0);
            $table->integer('point_2')->default(0);
            $table->integer('point_3')->default(0);

            $table->string('description')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('admission_infos');
    }
}
