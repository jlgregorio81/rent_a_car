<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    //..eager loading 
    protected $with = ['city', 'telephone'];

    public function telephone(){
        return $this->hasOne(Telephone::class, 'id', 'id');
    }

    public function delete(){
        $this->telephone()->delete();
        parent::delete();
    }

    public function city(){
        return $this->belongsTo(City::class);
    }


}
