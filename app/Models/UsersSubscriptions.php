<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UsersSubscriptions extends Pivot
{
    //
    use HasFactory;

    public $table = 'users_subscriptions';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'subscription_id',
        'note',
        'expired_at'
    ];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    public function subscription()
    {
        # code...
        return $this->belongsTo(Subscription::class);
    }

    public function subscriptions()
    {
        # code...
        $this->belongsToMany(Subscription::class);
    }
}
