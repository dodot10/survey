<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, HasRoles;

    

    protected $table = 'users'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'fullname',
        'username',
        'email',
        'password',
    ];

    public function surveyor()
    {
        return $this->hasOne(Surveyor::class, 'user_id');
    }

    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role) {
        return $this->roles->contains('name', $role);
    }
}
