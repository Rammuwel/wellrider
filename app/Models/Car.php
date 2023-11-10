<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'carname',
        'mileage',
        'plate_no',
        'daily_price',
        'carid',
        'image',
        'model',
        'fuel_type',
        'address',
        'condition'
        ];

        public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

}
