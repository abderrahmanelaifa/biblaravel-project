<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnArgument;

class Auteur extends Model
{
    protected $fillable = ['nom','bibliographie'];


    //un auteur posede plusieurs livres
    public function livres() {
        return $this->hasMany(Livre::class);

    }
    
}
