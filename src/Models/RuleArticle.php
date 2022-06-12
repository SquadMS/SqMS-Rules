<?php

namespace SquadMS\Rules\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class RuleArticle extends Model
{
    use HasTranslations;

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
}
