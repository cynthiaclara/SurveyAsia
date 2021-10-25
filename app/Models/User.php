<?php

namespace App\Models;

use App\Jobs\QueuedEmailVerificationJob;
use App\Notifications\Auth\QueuedEmailVerification;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, CanResetPassword;

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
        'role_id',
        'survey_id'
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

    // public function sendEmailVerificationNotification()
    // {
    //     // Approach 1
    //     // $this->notify(new QueuedEmailVerification());

    //     // Approach 2
    //     // QueuedEmailVerificationJob::dispatch($this);
    // }


    /**
     * Check If user have a specified role
     * @param App\Models\User $user
     * @param int $role
     * @return bool
     */
    public function hasRole(User $user, $role)
    {
        # code...

        if ($role == Role::IS_ADMIN) {
            return $user->role_id == Role::IS_ADMIN;
        }

        if ($role == Role::IS_RESEARCHER) {
            return $user->role_id == Role::IS_RESEARCHER;
        }

        return $user->role_id == Role::IS_RESPONDENT;
    }

    /**
     * Get user's profile, each user will have only one profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profile()
    {
        # code...
        return $this->hasOne(UsersProfile::class);
    }

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

    /**
     * Get user's single subscription, each user will have only one active
     * subscription so that the relation is one-to-one
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscription()
    {
        # code...
        return $this->hasOne(Subscription::class, 'user_id');
    }

    /**
     * Get user's list of subscriptions, each user could have
     * more than one subscriptions but expired
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscriptions()
    {
        # code...
        return $this->hasMany(Subscription::class, 'user_id');
    }

    // This code will return error, dont use it
    // public function permissions()
    // {
    //     # code...
    //     return $this->hasManyThrough(Permission::class, Role::class);
    // }

    public static function hitungUser()
    {
        // $users = User::withCount('username')->get();
        $users = User::count();
        // $user->follows->count();
        return $users;
    }
}
