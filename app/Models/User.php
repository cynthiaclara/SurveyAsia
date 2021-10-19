<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get user's role, each user will have only one role so that the
     * relation is one-to-one, or many
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        # code...
        return $this->belongsTo(Role::class);
    }

    public function subscription()
    {
        # code...
        return $this->hasOne(Subscription::class, 'user_id');
    }

    public function subscriptions()
    {
        # code...
        return $this->hasMany(Subscription::class, 'user_id');
    }

    public function permissions()
    {
        # code...
        return $this->hasManyThrough(Permission::class, Role::class);
    }

    public static function hitungUser()
    {
        // $users = User::withCount('username')->get();
        $users = User::count();
        // $user->follows->count();
        return $users;
    }
}
