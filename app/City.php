<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ["name" , "postal_code"];
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
