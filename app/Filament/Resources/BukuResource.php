<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Filament\Resources\BukuResource\RelationManagers;
use App\Models\Buku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = 'Buku';

    protected static ?string $navigationGroup = 'B. Indonesia';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $pluralModelLabel = 'Buku';

    protected static ?int $navigationSort = 3;

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

                                Forms\Components\FileUpload::make('file_id')
                                    ->label('File PDF')
                                    ->downloadable()
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->directory('buku_id'),

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
                                Forms\Components\FileUpload::make('image')
                                    ->label('Gambar/Foto')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('siaranpers')
                                    ->required(),

                                Forms\Components\TextInput::make('publisher')
                                    ->default(' Kaltim')
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
            'index' => Pages\ListBukus::route('/'),
            'create' => Pages\CreateBuku::route('/create'),
            'edit' => Pages\EditBuku::route('/{record}/edit'),
        ];
    }
}
