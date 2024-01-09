<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiaranPersResource\Pages;
use App\Filament\Resources\SiaranPersResource\RelationManagers;
use App\Models\SiaranPers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiaranPersResource extends Resource
{
    protected static ?string $model = SiaranPers::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'B. Indonesia';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(12)
                    ->schema([
                        Forms\Components\Section::make('Information')
                            ->collapsible()
                            ->columnSpan(8)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required(),

                                Forms\Components\Hidden::make('slug'),

                                Forms\Components\RichEditor::make('content')
                                    ->required()
                                    ->fileAttachmentsDirectory('attachments')
                                    ->disableToolbarButtons([
                                        'codeBlock',
                                    ]),
                            ]),

                        Forms\Components\Section::make('Media')
                            ->collapsible()
                            ->columnSpan(4)
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('siaranpers')
                                    ->required(),

                                Forms\Components\TextInput::make('publisher')
                                    ->required(),

                                Forms\Components\DatePicker::make('date_published')
                                    ->native(false)
                                    ->closeOnDateSelection()
                                    ->required(),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->size(40),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('date_published')
                    ->date('d M Y')
                    ->sortable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('publisher')
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
            'index' => Pages\ListSiaranPers::route('/'),
            'create' => Pages\CreateSiaranPers::route('/create'),
            'edit' => Pages\EditSiaranPers::route('/{record}/edit'),
        ];
    }
}
