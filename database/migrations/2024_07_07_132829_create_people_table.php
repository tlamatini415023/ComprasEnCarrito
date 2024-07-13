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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->enum('Type',['Persona Natural', 'Empresa','Proveedor'])->notNullable(); 
            $table->string('First_Name',50)->notNullable();
            $table->string('Last_Name', 50)->notNullable();
            $table->enum('Document_Type',['C.C.', 'TI', 'Pasaporte', 'Nit'])->notNullable();
            $table->string('Document_Number', 20)->notNullable();
            $table->string('Email', 100)->unique()->notNullable();
            $table->string('Phone', 20)->notNullable();
            $table->string('Address', 100)->notNullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
