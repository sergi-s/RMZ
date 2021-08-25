<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_profiles', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedBigInteger('user_id')->unique();
            $table->integer("years_of_xp");
            $table->string("license");
            $table->boolean("isVIP")->default(false);
            $table->boolean("approved")->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chef_profiles');
    }
}
