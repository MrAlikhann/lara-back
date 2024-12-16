<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'street_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function moderatorObjects()
    {
        return $this->hasMany(ModeratorObject::class);
    }
}
