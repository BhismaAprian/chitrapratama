<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HalamanResource\Pages;
use App\Filament\Resources\HalamanResource\RelationManagers;
use App\Models\Halaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HalamanResource extends Resource
{
    protected static ?string $model = Halaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'B. Indonesia';

    protected static ?string $navigationLabel = 'Tentang Kami';

    protected static ?string $pluralModelLabel = 'Tentang Kami';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->columnSpanFull()
                    ->required(),

                Forms\Components\Hidden::make('slug'),

                Forms\Components\RichEditor::make('content')
                    ->columnSpanFull()
                    ->required()
                    ->fileAttachmentsDirectory('attachments')
                    ->disableToolbarButtons([
                        'codeBlock',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->wrap(),

                Tables\Columns\TextColumn::make('content')
                    ->limit(100)
                    ->html()
                    ->wrap(),
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
            'index' => Pages\ListHalamen::route('/'),
            'create' => Pages\CreateHalaman::route('/create'),
            'edit' => Pages\EditHalaman::route('/{record}/edit'),
        ];
    }
}
