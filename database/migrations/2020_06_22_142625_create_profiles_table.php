<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('full_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('identity_number')->nullable();
            $table->integer('id_issued_place')->nullable();
            $table->date('id_issued_date')->nullable();
            $table->string('address')->nullable();
            $table->string('province')->nullable();
            $table->string('highschool_address')->nullable();

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
        Schema::dropIfExists('profiles');
    }
}
