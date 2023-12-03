<?php

namespace Modules\Faq\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Faq\Database\factories\QuestionFactory;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['question','answer'];
    
    protected static function newFactory(): QuestionFactory
    {
        //return QuestionFactory::new();
    }
}
