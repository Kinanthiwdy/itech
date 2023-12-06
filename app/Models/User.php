<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Authenticatable
{
    use AuthenticableTrait, HasFactory;

    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $guarded = ['id'];
}
