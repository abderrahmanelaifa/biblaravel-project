<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $fillable = ['nom','adresse'];

    //une edittion peut publier plusieurs livres

    public function livres (){

    return $this->hasMany(Livre::class);
    }
}
