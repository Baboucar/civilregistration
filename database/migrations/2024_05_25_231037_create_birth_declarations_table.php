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
        Schema::create('birth_declarations', function (Blueprint $table) {
            $table->id();
            $table->string('child_gender');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('birthplace');
            $table->string('region');
            $table->string('sector');
            $table->date('date_of_birth');
            $table->time('time_of_birth');
            $table->string('stat_gender_male')->nullable();
            $table->string('stat_gender_female')->nullable();
            $table->integer('birth_date_day')->nullable();
            $table->integer('birth_date_month')->default(1); // Set default value
            $table->integer('birth_date_year');
            $table->integer('birth_weight');
            $table->string('delivery_type');
            $table->string('delivery_method')->default('Natural'); // Set default value
            $table->string('place_of_birth');
            $table->string('birth_assistance');
            $table->integer('pregnancy_duration');
            $table->string('prenatal_care');
            $table->date('mother_birth_date');
            $table->integer('mother_age');
            $table->integer('number_of_previous_births');
            $table->integer('child_length');
            $table->integer('head_circumference');
            $table->integer('number_of_live_births');
            $table->integer('number_of_stillbirths');
            $table->integer('immediate_previous_pregnancy_live_births')->nullable();
            $table->integer('immediate_previous_pregnancy_stillbirths')->nullable();
            $table->string('parents_residence');
            $table->string('parents_region');
            $table->string('parents_sector');
            $table->string('parents_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birth_declarations');
    }
};
