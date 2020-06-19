<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'street', 'house', 'additional_info', 'user_id', 'area_id'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function city()
    {
        $area = $this->area;
        return $area->city;
    }
}
