<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

{
    //
}
class SysGroup extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_groups');
    }

    public function roles()
    {
        return $this->hasMany(SysRole::class, 'user_group_id');
    }
}
