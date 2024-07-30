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
        Schema::create('civil_registrations', function (Blueprint $table) {
            $table->id();
    $table->time('registration_time');
    $table->date('registration_date');
    $table->string('location_place');
    $table->string('location_sector');
    $table->string('location_region');
    $table->string('individual_gender');
    $table->string('individual_first_name');
    $table->string('individual_family_name');
    $table->string('father_full_name');
    $table->integer('father_age');
    $table->string('father_marital_status');
    $table->string('father_profession');
    $table->string('father_birthplace');
    $table->string('father_sector');
    $table->string('father_region');
    $table->string('mother_full_name');
    $table->integer('mother_age');
    $table->string('mother_marital_status');
    $table->string('mother_profession');
    $table->string('mother_birthplace');
    $table->string('mother_sector');
    $table->string('mother_region');
    $table->string('residence');
    $table->string('paternal_grandfather');
    $table->string('paternal_grandmother');
    $table->string('maternal_grandfather');
    $table->string('maternal_grandmother');
    $table->string('declaration_made_by');
    $table->string('witness_1');
    $table->string('witness_2');
    $table->string('registration_made_by');
    $table->time('registration_time_details');
    $table->string('registrar_name');
    $table->decimal('emoluments', 8, 2);
    $table->decimal('stamp_duties', 8, 2);
    $table->date('date');
    $table->string('place');
    $table->text('averbamentos')->nullable();
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('civil_registrations');
    }
};
