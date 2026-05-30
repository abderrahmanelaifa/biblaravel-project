<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = ['titre','stock','auteur_id','edition_id'];

    //un livre appartient a un auteur
    public function auteur (){

    return $this->belongsTo(Auteur::class);
    }

    //un livre appartient a une seule edition
    public function edition () {

    return $this->belongsTo(Edition::class);
    }

    //un livre est concerne par plusieurs emprunt
    public function emprunts (){

    return $this->hasMany(Emprunte::class);
    }
}
