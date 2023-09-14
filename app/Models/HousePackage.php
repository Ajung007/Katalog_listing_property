<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HousePackage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
        'maps',
        'bedrooms',
        'bathups',
        'doors',
        'living',
        'tipe',
        'building_area',
        'surface_area',
        'total_units',
        'remain_units',
        'project_facilities',
        'point_of_interest',
        'supporting_facilities',
        'name_person',
        'no_hp',
        'lowest_price',
        'highest_price',
        'cities'
    ];

    protected $hidden = [];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'house_packages_id', 'id');
    }
}