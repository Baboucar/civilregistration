<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CivilRegistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'registration_time',
        'registration_date',
        'location_place',
        'location_sector',
        'location_region',
        'individual_gender',
        'individual_first_name',
        'individual_family_name',
        'father_full_name',
        'father_age',
        'father_marital_status',
        'father_profession',
        'father_birthplace',
        'father_sector',
        'father_region',
        'mother_full_name',
        'mother_age',
        'mother_marital_status',
        'mother_profession',
        'mother_birthplace',
        'mother_sector',
        'mother_region',
        'residence',
        'paternal_grandfather',
        'paternal_grandmother',
        'maternal_grandfather',
        'maternal_grandmother',
        'declaration_made_by',
        'witness_1',
        'witness_2',
        'registration_made_by',
        'registration_time_details',
        'registrar_name',
        'emoluments',
        'stamp_duties',
        'date',
        'place',
        'averbamentos',
    ];
}
