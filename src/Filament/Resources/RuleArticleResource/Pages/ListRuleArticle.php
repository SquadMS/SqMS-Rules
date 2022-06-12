<?php

namespace SquadMS\Rules\Filament\Resources\RuleArticleResource\Pages;

use SquadMS\Rules\Filament\Resources\RuleArticleResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListRuleArticle extends ListRecords
{
    use Translatable;
    
    protected static string $resource = RuleArticleResource::class;
}
