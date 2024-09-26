<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

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
                ->image(),
                Forms\Components\TextInput::make('headline')
                ->label('Headline')
                ->required(),
                Forms\Components\TextInput::make('criteria')
                ->label('Criteria')
                ->required(),
                Forms\Components\TextInput::make('description')
                
                ->required(),
                Forms\Components\DateTimePicker::make('date')
                ->label('Date')
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
            
                Tables\Columns\ImageColumn::make('image'),
                
                
                Tables\Columns\TextColumn::make('headline')
                ->label('Headline')
                ->searchable()
                ->sortable(),

                Tables\Columns\TextColumn::make('criteria')
                ->label('Criteria')
                ->searchable()
                ->sortable(),
            
                Tables\Columns\TextColumn::make('description'),
                

                Tables\Columns\TextColumn::make('date')
                ->label('Date')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
