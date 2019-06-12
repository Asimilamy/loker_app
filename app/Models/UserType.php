<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserType extends Model
{
    protected $fillable = ['user_id', 'child_id', 'type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
