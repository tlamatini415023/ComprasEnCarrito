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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Category_id');
            $table->string('code',50);
            $table->string('name',100);
            $table->decimal('sale_price',11,2);            
            $table->integer('stock');
            $table->string('description',256)->nullable();
            $table->boolean('state')->default(1);
            $table->timestamps();

            $table->foreign('Category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
