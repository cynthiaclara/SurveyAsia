<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $table = 'users_subscription';

    public $timestamps = true;

    protected $fillable = [
        'name', 'description', 'user_id', 'expired_at'
    ];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
}
