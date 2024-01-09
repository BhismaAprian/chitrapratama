<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LembarFaktaResource\Pages;
use App\Filament\Resources\LembarFaktaResource\RelationManagers;
use App\Models\LembarFakta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LembarFaktaResource extends Resource
{
    protected static ?string $model = LembarFakta::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationLabel = 'Lembar Fakta';

    protected static ?string $navigationGroup = 'B. Indonesia';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $pluralModelLabel = 'Lembar Fakta';

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
            'index' => Pages\ListLembarFaktas::route('/'),
            'create' => Pages\CreateLembarFakta::route('/create'),
            'edit' => Pages\EditLembarFakta::route('/{record}/edit'),
        ];
    }
}
