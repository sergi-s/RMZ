<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedBigInteger("chef_id");
            // $table->integer("category_id")->unsigned();
            $table->foreignidfor(Category::class);
            $table->double("price");
            $table->string("name");
            $table->string("description");
            $table->timestamps();

            $table->foreign('chef_id')->references('id')->on('users')
                ->onDelete('cascade');
            // $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
    }
}
