<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('location');
            $table->longText('about');
            $table->string('maps');
            $table->string('bedrooms');
            $table->integer('bathups');
            $table->integer('doors');
            $table->integer('living');
            $table->string('tipe');
            $table->integer('building_area');
            $table->integer('surface_area');
            $table->integer('total_units');
            $table->integer('remain_units');
            $table->longText('project_facilities');
            $table->longText('point_of_interest');
            $table->longText('supporting_facilities');
            $table->string('name_person');
            $table->string('no_hp');
            $table->integer('lowest_price');
            $table->integer('highest_price');
            $table->softDeletes();
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
        Schema::dropIfExists('house_packages');
    }
}
