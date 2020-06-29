<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title')->nullable();
            $table->text('changedtitle')->default(1);
            $table->string('description')->nullable();
            $table->longText('content')->nullable();

            $table->string('origional_author')->nullable();
//            $table->foreignId('origional_author')->nullable()
//                ->constrained('admins')
//                ->onDelete('set null')
//                ->onUpdate('cascade');

            $table->string('author');
            $table->string('avatar')->nullable();

            $table->foreignId('category_id')->nullable()
                ->constrained('categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->integer('status');
            $table->integer('target');
            $table->integer('view')->nullable()->default(0);
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
        Schema::dropIfExists('posts');
    }
}
