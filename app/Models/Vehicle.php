<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function rentals(){
        return $this->hasMany(Rental::class, 'vehicle_id', 'id');
    }

    public function clients(){
        return $this->belongsToMany(Client::class,'rentals')
            ->withPivot(['date_rent', 'date_devolution', 'value']);
    }

}
