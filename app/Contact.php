<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name' , 'city_id' , 'phone' , 'mail' , 'website' , 'note'] ;

    public function city()
    {
        return $this->belongsTo(City::class , 'city_id' , 'id');
    }
}
