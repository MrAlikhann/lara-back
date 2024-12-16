<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeratorObject extends Model
{
    use HasFactory;

    // Указываем разрешенные атрибуты для массового заполнения
    protected $fillable = [
        'region_id',
        'city_id',
        'building_type_id',
        'street_id',
        'house',
        'corpus',
        'latitude',
        'longitude',
        'status',
    ];

    // Связь с моделью Region
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    // Связь с моделью City
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    // Связь с моделью BuildingType
    public function buildingType()
    {
        return $this->belongsTo(BuildingType::class);
    }

    // Связь с моделью Street
    public function street()
    {
        return $this->belongsTo(Street::class);
    }
}
