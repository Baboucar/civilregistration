<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthDeclaration extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_gender',
        'father_name',
        'mother_name',
        'birthplace',
        'region',
        'sector',
        'date_of_birth',
        'time_of_birth',
        'birth_weight',
        'delivery_type',
        'place_of_birth',
        'birth_assistance',
        'pregnancy_duration',
        'prenatal_care',
        'mother_birth_date',
        'mother_age',
        'number_of_previous_births',
        'child_length',
        'head_circumference',
        'number_of_live_births',
        'number_of_stillbirths',
        'parents_residence',
        'parents_contact',
        'birth_date_month', // Add this field
        'birth_date_year', // Add this field
        'birth_date_day', // Add this field
        'stat_gender_male', // Add this field
        'stat_gender_female', // Add this field
        'immediate_previous_pregnancy_live_births', // Add this field
        'immediate_previous_pregnancy_stillbirths', // Add this field
        'parents_region', // Add this field
        'parents_sector', // Add this field
    ];
}
