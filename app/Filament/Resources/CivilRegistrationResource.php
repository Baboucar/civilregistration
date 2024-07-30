<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CivilRegistrationResource\Pages;
use App\Models\CivilRegistration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Columns\TextColumn; // Correct namespace for TextColumn


class CivilRegistrationResource extends Resource
{
    protected static ?string $model = CivilRegistration::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TimePicker::make('registration_time')->required(),
                DatePicker::make('registration_date')->required(),
                TextInput::make('location_place')->required(),
                TextInput::make('location_sector')->required(),
                TextInput::make('location_region')->required(),
                Select::make('individual_gender')->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ])->required(),
                TextInput::make('individual_first_name')->required(),
                TextInput::make('individual_family_name')->required(),
                TextInput::make('father_full_name')->required(),
                TextInput::make('father_age')->numeric()->required(),
                TextInput::make('father_marital_status')->required(),
                TextInput::make('father_profession')->required(),
                TextInput::make('father_birthplace')->required(),
                TextInput::make('father_sector')->required(),
                TextInput::make('father_region')->required(),
                TextInput::make('mother_full_name')->required(),
                TextInput::make('mother_age')->numeric()->required(),
                TextInput::make('mother_marital_status')->required(),
                TextInput::make('mother_profession')->required(),
                TextInput::make('mother_birthplace')->required(),
                TextInput::make('mother_sector')->required(),
                TextInput::make('mother_region')->required(),
                TextInput::make('residence')->required(),
                TextInput::make('paternal_grandfather')->required(),
                TextInput::make('paternal_grandmother')->required(),
                TextInput::make('maternal_grandfather')->required(),
                TextInput::make('maternal_grandmother')->required(),
                TextInput::make('declaration_made_by')->required(),
                TextInput::make('witness_1')->required(),
                TextInput::make('witness_2')->required(),
                TextInput::make('registration_made_by')->required(),
                TimePicker::make('registration_time_details')->required(),
                TextInput::make('registrar_name')->required(),
                TextInput::make('emoluments')->numeric()->required(),
                TextInput::make('stamp_duties')->numeric()->required(),
                DatePicker::make('date')->required(),
                TextInput::make('place')->required(),
                TextInput::make('averbamentos')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('registration_time')->label('Registration Time'),
                TextColumn::make('registration_date')->label('Registration Date'),
                TextColumn::make('location_place')->label('Place'),
                TextColumn::make('individual_first_name')->label('First Name'),
                TextColumn::make('individual_family_name')->label('Family Name'),
                // Add other columns as needed
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCivilRegistrations::route('/'),
            'create' => Pages\CreateCivilRegistration::route('/create'),
            'edit' => Pages\EditCivilRegistration::route('/{record}/edit'),
        ];
    }
}
