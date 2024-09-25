<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportResource\Pages;
use App\Filament\Resources\ReportResource\RelationManagers;
use App\Models\Report;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                ->label('Name')
                ->required(),
            
            Forms\Components\FileUpload::make('image')
                ->label('Image')
                ->image()
                ->required(),
            Forms\Components\TextInput::make('headline')
                ->label('Headline')
                ->required(),
            Forms\Components\Textarea::make('criteria')
                ->label('Criteria')
                ->required(),
            Forms\Components\Select::make('category_id')
                ->relationship('category','name')
                // ->searchable()
                ->preload()
                ->required(),
            Forms\Components\TextInput::make('link')
                ->label('Link')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                ->label('Name')
                ->searchable()
                ->sortable(),
            
            Tables\Columns\ImageColumn::make('image')
                ->label('Image'),
                
            Tables\Columns\TextColumn::make('headline')
                ->label('Headline')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('criteria')
                ->label('Criteria')
                ->searchable()
                ->sortable(),
            
            Tables\Columns\TextColumn::make('link')
                ->label('Link')
                ->searchable()
                ->sortable(),

            
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }
}
