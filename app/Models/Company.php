<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // add your table columns here

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

