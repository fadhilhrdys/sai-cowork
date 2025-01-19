<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Place extends Model
{
    use HasFactory;
    
    protected $table = 'places';

    protected $fillable = [
        'name',
        'address',
        'opening_hours',
        'description',
        'latitude',
        'longtitude',
        'amenities',
        'admin_id',
        'city_id',
    ];

    protected function casts(): array
    {
        return [
            'amenities' => 'array'
        ];
    }

    // relation one place has many media
    public function media(): HasMany
    {
        return $this->hasMany(PlaceMedia::class);
    }
}
