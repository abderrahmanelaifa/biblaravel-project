<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprunte extends Model
{
    protected $fillable = [
        'livre_id',
        'client_id',
        'date_emprunt',
        'date_retour_prevue',
        'date_retour_reelle'
    ];

//une emprente concerne un seul livre
public function livre(){
    return $this->belongsTo(Livre::class);
}

//une eprunt concerne un seul client
public function client (){
    return $this->belongsTo(Client::class);
}

}
