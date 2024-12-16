<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region_id',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function moderatorObjects()
    {
        return $this->hasMany(ModeratorObject::class);
    }
}
