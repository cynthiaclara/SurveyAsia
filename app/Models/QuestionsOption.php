<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsOption extends Model
{
    use HasFactory;

    protected $table = 'questions_option';

    public $timestamps = true;

    protected $fillable = [
        'question_id',
        'value'
    ];

    public function question()
    {
        # code...
        return $this->belongsTo(Question::class);
    }
}
