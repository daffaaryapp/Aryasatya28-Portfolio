<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AuthorResource\Pages;
use App\Filament\Resources\AuthorResource\RelationManagers;
use App\Models\Author;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class AuthorResource extends Resource
{
    protected static ?string $model = Author::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // tempat input data
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                
                Forms\Components\TextInput::make('occupation')
                ->required()
                ->maxLength(255),

                Forms\Components\TextInput::make('location')
                ->label('Location')
                ->required()
                ->maxLength(255)
                ->placeholder('Enter location'),
                
                Forms\Components\FileUpload::make('avatar')
                ->image()
                ->required(),

                Forms\Components\TextInput::make('email')
                ->required()
                ->email(),

                Forms\Components\TextInput::make('phone')
                ->required(),
                // ->phoneNumber(),

                Forms\Components\DatePicker::make('birthday')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label('Name')
                ->sortable()
                ->searchable(),

                Tables\Columns\TextColumn::make('occupation')
                ->label('Occupation')
                ->sortable()
                ->searchable(),

                Tables\Columns\TextColumn::make('location')
                ->label('Location')
                ->sortable()
                ->searchable(),

                Tables\Columns\ImageColumn::make('avatar')
                ->label('Avatar')
                ->rounded()
                ->size(50),

                Tables\Columns\TextColumn::make('email')
                ->label('Email')
                ->sortable()
                ->searchable(),

                Tables\Columns\TextColumn::make('phone')
                ->label('Phone')
                ->sortable()
                ->searchable(),

                Tables\Columns\TextColumn::make('birthday')
                ->label('Birthday')
                ->sortable(),
                // ->format('Y-m-d'),

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
            'index' => Pages\ListAuthors::route('/'),
            'create' => Pages\CreateAuthor::route('/create'),
            'edit' => Pages\EditAuthor::route('/{record}/edit'),
        ];
    }
}
