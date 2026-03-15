<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    protected $fillable = [
        'category_name',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'category_id');
    }
}
