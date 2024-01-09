<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FactSheetResource\Pages;
use App\Filament\Resources\FactSheetResource\RelationManagers;
use App\Models\FactSheet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FactSheetResource extends Resource
{
    protected static ?string $model = FactSheet::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationLabel = 'Fact Sheet';

    protected static ?string $navigationGroup = 'English';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $pluralModelLabel = 'Fact Sheet';

    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(12)
                    ->schema([
                        Forms\Components\Section::make('Informasi')
                            ->collapsible()
                            ->columnSpan(8)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required(),

                                Forms\Components\Hidden::make('slug'),

                                Forms\Components\FileUpload::make('file_id')
                                    ->label('File')
                                    ->downloadable()
                                    ->directory('lembar_faktas'),

                                Forms\Components\RichEditor::make('content')
                                    ->label('Konten')
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
                                Forms\Components\TextInput::make('publisher')
                                    ->default('Chitra Pratama')
                                    ->required(),

                                Forms\Components\DatePicker::make('date_published')
                                    ->label('Tanggal')
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
            'index' => Pages\ListFactSheets::route('/'),
            'create' => Pages\CreateFactSheet::route('/create'),
            'edit' => Pages\EditFactSheet::route('/{record}/edit'),
        ];
    }
}
