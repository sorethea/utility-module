<?php

namespace Modules\Utility\Filament\Resources;

use Modules\Utility\Filament\Resources\PhoneResource\Pages;
use Modules\Utility\Filament\Resources\PhoneResource\RelationManagers;
use Modules\Utility\Models\Phone;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PhoneResource extends Resource
{
    protected static ?string $model = Phone::class;

    protected static function getNavigationIcon(): string
    {
        return config('utility.models.Phone.icon');
    }

    protected static function getNavigationGroup(): ?string
    {
        return config('utility.navigation.name');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("phone_number")->searchable(),
                Tables\Columns\TextColumn::make("owner_id")->searchable(),
                Tables\Columns\TextColumn::make("owner_type")->searchable(),
                //Tables\Columns\BooleanColumn::make("is_default")
            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPhones::route('/'),
            //'create' => Pages\CreatePhone::route('/create'),
            //'edit' => Pages\EditPhone::route('/{record}/edit'),
        ];
    }
}
