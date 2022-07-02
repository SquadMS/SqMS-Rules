<?php

namespace SquadMS\Rules\Filament\Resources\RuleArticleResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;
use SquadMS\Rules\Filament\Resources\RuleArticleResource;

class EditRuleArticle extends EditRecord
{
    use Translatable;

    protected static string $resource = RuleArticleResource::class;
}
