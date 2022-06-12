<?php

namespace SquadMS\Rules\Filament\Resources\RuleArticleResource\Pages;

use SquadMS\Rules\Filament\Resources\RuleArticleResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateRuleArticle extends CreateRecord
{
    use Translatable;
    
    protected static string $resource = RuleArticleResource::class;
}
