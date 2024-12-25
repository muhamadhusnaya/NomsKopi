<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromocodeResource\Pages;
use App\Filament\Resources\PromocodeResource\RelationManagers;
use App\Models\Promocode;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Symfony\Contracts\Service\Attribute\Required;

class PromocodeResource extends Resource
{
    protected static ?string $model = Promocode::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Grid::make()
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->label('Name Event')
                                ->required(),
                            Forms\Components\TextInput::make('codepromo')
                                ->label('Kode Promo')
                                ->required(),
                            Forms\Components\TextInput::make('discounts')
                                ->label('Potongan (%)')
                                ->required(),
                            Forms\Components\DatePicker::make('expired')
                                ->label('Expired')
                                ->minDate(now())
                                ->maxDate(now()->addMonth(1))
                                ->required()
                        ]),

                    FileUpload::make('image')
                        ->image()
                        ->directory('promocodes')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('codepromo'),
                Tables\Columns\TextColumn::make('discounts'),
                Tables\Columns\TextColumn::make('expired')
                ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPromocodes::route('/'),
            'create' => Pages\CreatePromocode::route('/create'),
            'edit' => Pages\EditPromocode::route('/{record}/edit'),
        ];
    }
}
