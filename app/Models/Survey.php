<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = true;

    protected $fillable = [
        'id',
        'title',
        'description',
        'creator_id',
    ];


    /**
     * Create BelongsTo one creator (user) relationship
     */
    public function creator()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    /**
     * Create HasMany questions for this survey
     */
    public function questions()
    {
        # code...
        return $this->hasMany(Question::class);
    }
}
