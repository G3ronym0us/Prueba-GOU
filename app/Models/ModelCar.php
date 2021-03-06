<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    use HasFactory;

    protected $table = 'model_cars';
    protected $primaryKey = 'id';

    protected $fillable = [
                            'brand_id',
                            'model_car'
                        ];
}
