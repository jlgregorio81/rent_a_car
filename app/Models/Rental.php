<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    //..eager loading
    protected $with = ['client', 'vehicle'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }

}

