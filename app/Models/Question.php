<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'survey_id',
        'has_options',
        'multi_answers'
    ];

    public function survey()
    {
        # code...
        return $this->belongsTo(Survey::class);
    }

    public function answers()
    {
        # code...
        return $this->hasMany(Answer::class);
    }

    public function options()
    {
        # code...
        return $this->hasMany(QuestionsOption::class);
    }
}
