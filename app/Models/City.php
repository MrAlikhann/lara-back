<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city_id',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function streets()
    {
        return $this->hasMany(Street::class);
    }

    public function moderatorObjects()
    {
        return $this->hasMany(ModeratorObject::class);
    }
}
