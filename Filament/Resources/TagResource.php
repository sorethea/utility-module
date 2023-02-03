<?php

namespace Modules\Utility\Filament\Resources;

use Modules\Utility\Filament\Resources\TagResource\Pages;
use Modules\Utility\Filament\Resources\TagResource\RelationManagers;
use Modules\Utility\Models\Tag;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

    protected static function getNavigationIcon(): string
    {
        return config('utility.models.Tag.icon');
    }

    protected static function getNavigationGroup(): ?string
    {
        return config('utility.navigation.name');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("name")
                    ->unique("tags", "name", fn($record)=>$record)
                    ->required(),
                Forms\Components\TextInput::make("slug")->nullable(),
                Forms\Components\TextInput::make("model"),
                Forms\Components\Toggle::make('active')->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name")->searchable(),
                Tables\Columns\TextColumn::make("slug")->searchable(),
                Tables\Columns\TextColumn::make("model")->searchable(),
                Forms\Components\Toggle::make("active"),
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
            'index' => Pages\ListTags::route('/'),
            'create' => Pages\CreateTag::route('/create'),
            'edit' => Pages\EditTag::route('/{record}/edit'),
        ];
    }
}
