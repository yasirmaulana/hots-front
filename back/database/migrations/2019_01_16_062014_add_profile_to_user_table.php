<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('wa_number')->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('profession')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->string('role')->nullable();
            $table->string('hots_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('wa_number');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('profession');
            $table->string('country');
            $table->string('postal_code');
            $table->string('address');
            $table->string('role');
            $table->string('hots_id');
        });
    }
}
