<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SalesmanResource\Pages;
use App\Filament\Resources\SalesmanResource\RelationManagers;
use App\Models\Salesman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SalesmanResource extends Resource
{
    protected static ?string $model = Salesman::class;

    protected static ?string $navigationGroup = "Transaction";

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('salesman_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('salesman_city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('commissions')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('salesman_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('salesman_city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('commissions')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSalesmen::route('/'),
            'create' => Pages\CreateSalesman::route('/create'),
            'edit' => Pages\EditSalesman::route('/{record}/edit'),
        ];
    }
}
