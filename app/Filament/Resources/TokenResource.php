<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TokenResource\Pages;
use App\Filament\Resources\TokenResource\RelationManagers;
use App\Filament\Roles;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class TokenResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->autofocus()->required(),
                Components\TextInput::make('short_name')->required(),
                Components\TextInput::make('price')->required(),
                Components\DatePicker::make('start_date')->required(),
                Components\DatePicker::make('end_date')->required(),
                Components\DatePicker::make('hold_period')->required(),
                Components\FileUpload::make('image_path')->required()->image()
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('id')->searchable(),
                Columns\Text::make('name')->searchable(),
                Columns\Text::make('price')->searchable(),
                Columns\Text::make('start_date')->searchable(),
                Columns\Text::make('end_date')->searchable(),
                Columns\Text::make('hold_period')->searchable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListTokens::routeTo('/', 'index'),
            Pages\CreateToken::routeTo('/create', 'create'),
            Pages\EditToken::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
