<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frienders', function (Blueprint $table) {
            $table->unsignedBigInteger('friending_id');
            $table->foreign('friending_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
            $table->unsignedBigInteger('friended_id');
            $table->foreign('friended_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();

            $table->primary(['friending_id', 'friended_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frienders');
    }
}
