<?php

namespace SquadMS\Rules\Filament\Resources\RuleArticleResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;
use SquadMS\Rules\Filament\Resources\RuleArticleResource;

class ListRuleArticle extends ListRecords
{
    use Translatable;

    protected static string $resource = RuleArticleResource::class;
}
