<?php

namespace SquadMS\Rules\Models;

use Illuminate\Database\Eloquent\Model;

class RuleArticle extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'content',
    ];
}
