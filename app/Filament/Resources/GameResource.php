<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Filament\Resources\GameResource\RelationManagers;
use App\Models\Game;
use App\Models\Player;
use App\Models\Tournament;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('player_id')
                    ->options(Player::all()->pluck('name', 'id'))
                    ->label('Player'),
                Forms\Components\Select::make('tournament_id')
                    ->options(Tournament::all()->pluck('name', 'id'))
                    ->label('Tournament'),
                Forms\Components\TextInput::make('location'),
                Forms\Components\DatePicker::make('date')
                    ->firstDayOfWeek(7),
                Forms\Components\TimePicker::make('time')
                    ->withoutSeconds(),
                Forms\Components\TextInput::make('opponent'),
                Forms\Components\TextInput::make('opponent_score')->numeric(),
                Forms\Components\TextInput::make('team_score')->numeric()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('player.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tournament.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('location')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('date')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }
}
