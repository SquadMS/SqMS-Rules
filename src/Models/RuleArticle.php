<?php

namespace SquadMS\Rules\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class RuleArticle extends Model implements Sortable
{
    use HasTranslations, SortableTrait;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'content',
    ];
    
    public $translatable = [
        'title',
        'content',
    ];
    
    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];
}
