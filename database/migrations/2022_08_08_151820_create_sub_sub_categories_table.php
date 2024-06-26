<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->id();
            //  $table->foreignIdFor(Category::class)->constrained()->onDelete('cascade');
             $table->integer('category_id');
             $table->integer('sub_category_id');
             $table->string('sub_sub_category_name_en');
             $table->string('sub_sub_category_name_hin');
             $table->string('sub_sub_category_slug_en');
             $table->string('sub_sub_category_slug_hin');
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
        Schema::dropIfExists('sub_sub_categories');
    }
};
