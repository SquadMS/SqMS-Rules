<?php

namespace SquadMS\Rules\Filament\Resources;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use SquadMS\Foundation\Filament\Resources\Concerns\Translatable;
use SquadMS\Rules\Filament\Resources\RuleArticleResource\Pages;
use SquadMS\Rules\Models\RuleArticle;

class RuleArticleResource extends Resource
{
    use Translatable;

    protected static ?string $navigationGroup = 'Rules Management';

    protected static ?string $model = RuleArticle::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->rules('required|string|min:1|max:255')
                    ->required(),
                Forms\Components\MarkdownEditor::make('content')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')->sortable(),
                Tables\Columns\TextColumn::make('title')->sortable(),
            ])
            ->filters([
                //
            ])
            ->prependActions([
                Tables\Actions\Action::make('order_up')
                    ->iconButton()
                    ->action(fn (RuleArticle $record) => $record->moveOrderUp())
                    ->requiresConfirmation()
                    ->icon('heroicon-o-arrow-up'),
                Tables\Actions\Action::make('order_down')
                    ->iconButton()
                    ->action(fn (RuleArticle $record) => $record->moveOrderDown())
                    ->requiresConfirmation()
                    ->icon('heroicon-o-arrow-down'),
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
            'index' => Pages\ListRuleArticle::route('/'),
            'create' => Pages\CreateRuleArticle::route('/create'),
            'edit' => Pages\EditRuleArticle::route('/{record}/edit'),
        ];
    }
}
