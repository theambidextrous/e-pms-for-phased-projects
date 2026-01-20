<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

{
    //
}
class SysRole extends Model
{
    public function group()
    {
        return $this->belongsTo(SysGroup::class, 'user_group_id');
    }
}
