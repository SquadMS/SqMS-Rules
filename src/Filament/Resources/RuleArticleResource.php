<?php

namespace SquadMS\Rules\Filament\Resources;

use SquadMS\Rules\Filament\Resources\RuleArticleResource\Pages;
use SquadMS\Rules\Models\RuleArticle;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class RuleArticleResource extends Resource
{
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
                Tables\Columns\TextColumn::make('name')->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListRuleArticles::route('/'),
            'create' => Pages\CreateRuleArticles::route('/create'),
            'edit' => Pages\EditRuleArticles::route('/{record}/edit'),
        ];
    }
}
