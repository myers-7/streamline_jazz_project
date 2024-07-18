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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['M', 'F'])->comment ('M is male and F is female');
            $table->string('nin', 14); 
            $table->date('date_of_birth');
            $table->enum('marital_status',[ '1', '2', '3', '4'])->comment ('1 is married, 2 is married, 3 is divorced, 4 is widowed');
            $table->string('next_of_kin');
            $table->string('kin_phone_number');
            $table->enum('relationship',['1', '2', '3', '4', '5']) ->comment ('1 is mother , 2 is father, 3 is sister, 4 is brother, 5 is spouse');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
