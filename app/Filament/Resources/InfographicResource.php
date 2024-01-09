<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfographicResource\Pages;
use App\Filament\Resources\InfographicResource\RelationManagers;
use App\Models\Infographic;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfographicResource extends Resource
{
    protected static ?string $model = Infographic::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';

    protected static ?string $navigationGroup = 'English';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('caption')
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->imageEditor()
                    ->optimize('webp')
                    ->resize(50)
                    ->directory('infografis')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->size(40),

                Tables\Columns\TextColumn::make('caption')
                    ->wrap()
                    ->searchable()
                    ->limit(100)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListInfographics::route('/'),
            'create' => Pages\CreateInfographic::route('/create'),
            'edit' => Pages\EditInfographic::route('/{record}/edit'),
        ];
    }
}
