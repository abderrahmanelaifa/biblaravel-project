<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom','email'];

    //un client est concerner par plusieurs emprunts

    public function emprunts(){
        return $this->hasMany(Emprunte::class);
    }
}
