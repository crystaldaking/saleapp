<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class OrderResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\Select::make('status')->options([
                    '0' => 'Created',
                    '1' => 'Confirmed',
                    '2' => 'Completed',
                    '3' => 'Canceled',
                    '4' => 'Returned'
                ])->required()
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('user.name')->searchable(),
                Columns\Text::make('token.name')->searchable(),
                Columns\Text::make('price'),
                Columns\Text::make('order_time'),
                Columns\Text::make('status')->options([
                    '0' => 'Created',
                    '1' => 'Confirmed',
                    '2' => 'Completed',
                    '3' => 'Canceled',
                    '4' => 'Returned'
                ])->searchable()
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
            Pages\ListOrders::routeTo('/', 'index'),
            Pages\CreateOrder::routeTo('/create', 'create'),
            Pages\EditOrder::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
