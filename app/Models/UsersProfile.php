<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UsersProfile extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'nik',
        'first_name',
        'last_name',
        'gender',
        'birth_place',
        'birth_date',
        'jobs',
        'job_location',
        'education',
        'education_place',
        'avatar',
        'ktp_address',
        'address'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'nik',
        'user_id',
    ];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
}
