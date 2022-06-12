<?php

namespace SquadMS\Rules\Filament\Resources\RuleArticleResource\Pages;

use SquadMS\Rules\Filament\Resources\RuleArticleResource;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditRuleArticle extends EditRecord
{
    use Translatable;
    
    protected static string $resource = RuleArticleResource::class;
}
