<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BirthDeclarationResource\Pages;
use App\Models\BirthDeclaration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Columns\TextColumn;


class BirthDeclarationResource extends Resource
{
    protected static ?string $model = BirthDeclaration::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('child_gender')->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ])->required(),
                TextInput::make('father_name')->required(),
                TextInput::make('mother_name')->required(),
                TextInput::make('birthplace')->required(),
                TextInput::make('region')->required(),
                TextInput::make('sector')->required(),
                DatePicker::make('date_of_birth')->required(),
                TimePicker::make('time_of_birth')->required(),
                TextInput::make('birth_weight')->numeric()->required(),
                Select::make('delivery_type')->options([
                        'Single' => 'Single',
                        'Twin' => 'Twin',
                    ])->required(),
                TextInput::make('place_of_birth')->required(),
                TextInput::make('birth_assistance')->required(),
                TextInput::make('pregnancy_duration')->numeric()->required(),
                Select::make('prenatal_care')->options([
                        'Yes' => 'Yes',
                        'No' => 'No',
                        'Ignored' => 'Ignored',
                    ])->required(),
                DatePicker::make('mother_birth_date')->required(),
                TextInput::make('mother_age')->numeric()->required(),
                TextInput::make('number_of_previous_births')->numeric()->required(),
                TextInput::make('child_length')->numeric()->required(),
                TextInput::make('head_circumference')->numeric()->required(),
                TextInput::make('number_of_live_births')->numeric()->required(),
                TextInput::make('number_of_stillbirths')->numeric()->required(),
                TextInput::make('parents_residence')->required(),
                TextInput::make('parents_contact')->required(),
                TextInput::make('birth_date_month')->numeric()->required(),
                TextInput::make('birth_date_year')->numeric()->required(),
                TextInput::make('birth_date_day')->numeric()->nullable(),
                TextInput::make('stat_gender_male')->nullable(),
                TextInput::make('stat_gender_female')->nullable(),
                TextInput::make('immediate_previous_pregnancy_live_births')->nullable(),
                TextInput::make('immediate_previous_pregnancy_stillbirths')->nullable(),
                TextInput::make('parents_region')->required(),
                TextInput::make('parents_sector')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('child_gender')->label('Child Gender'),
                TextColumn::make('father_name')->label('Father Name'),
                TextColumn::make('mother_name')->label('Mother Name'),
                TextColumn::make('birthplace')->label('Birthplace'),
                TextColumn::make('region')->label('Region'),
                TextColumn::make('sector')->label('Sector'),
                TextColumn::make('date_of_birth')->label('Date of Birth')->date(),
                TextColumn::make('time_of_birth')->label('Time of Birth')->time(),
                TextColumn::make('birth_weight')->label('Birth Weight'),
                TextColumn::make('delivery_type')->label('Delivery Type'),
                TextColumn::make('place_of_birth')->label('Place of Birth'),
                TextColumn::make('birth_assistance')->label('Birth Assistance'),
                TextColumn::make('pregnancy_duration')->label('Pregnancy Duration'),
                TextColumn::make('prenatal_care')->label('Prenatal Care'),
                TextColumn::make('mother_birth_date')->label('Mother Birth Date')->date(),
                TextColumn::make('mother_age')->label('Mother Age'),
                TextColumn::make('number_of_previous_births')->label('Number of Previous Births'),
                TextColumn::make('child_length')->label('Child Length'),
                TextColumn::make('head_circumference')->label('Head Circumference'),
                TextColumn::make('number_of_live_births')->label('Number of Live Births'),
                TextColumn::make('number_of_stillbirths')->label('Number of Stillbirths'),
                TextColumn::make('parents_residence')->label('Parents Residence'),
                TextColumn::make('parents_contact')->label('Parents Contact'),
            ])
            ->filters([
                // Define filters as needed
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBirthDeclarations::route('/'),
            'create' => Pages\CreateBirthDeclaration::route('/create'),
            'edit' => Pages\EditBirthDeclaration::route('/{record}/edit'),
        ];
    }
}
