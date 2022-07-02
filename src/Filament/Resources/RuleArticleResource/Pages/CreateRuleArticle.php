<?php

namespace SquadMS\Rules\Filament\Resources\RuleArticleResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;
use SquadMS\Rules\Filament\Resources\RuleArticleResource;

class CreateRuleArticle extends CreateRecord
{
    use Translatable;

    protected static string $resource = RuleArticleResource::class;
}
