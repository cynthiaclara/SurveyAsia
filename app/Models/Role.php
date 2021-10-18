<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    //define constants
    public const IS_ADMIN = 1;
    public const IS_FREE_USER = 2;
    public const IS_ONE_TIME_USER = 3;
    public const IS_SUBSCRIBER_USER = 4;
    public const IS_RESPONDEN = 5;

    public $timestamps = true;

    protected $fillable = ['name', 'description', 'created_at', 'updated_at', 'deleted_at'];

    public function permissions()
    {
        # code...
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function user()
    {
        # code...
        return $this->hasOne(User::class);
    }

    public function users()
    {
        # code...
        return $this->hasMany(User::class);
    }
}
