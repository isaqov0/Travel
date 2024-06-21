<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
	        $table->id();
	        $table->string('name');
			$table->timestamp('date');
	        $table->string('duration');
	        $table->string('description');
			$table->unsignedBigInteger('region_id');
			$table->foreign('region_id')->references('id')->on('regions');
			$table->unsignedBigInteger('category_id');
			$table->foreign('category_id')->references('id')->on('categories');
			$table->unsignedBigInteger('country_id');
			$table->foreign('country_id')->references('id')->on('countries');
	        $table->float('price',10);
	        $table->string('currency');
	        $table->string('departure_city');
			$table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
