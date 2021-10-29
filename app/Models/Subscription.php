<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name', 'description',  'features'
    ];

    public function users()
    {
        # code...
        return $this->belongsToMany(User::class, 'users_subscriptions');
    }
}
