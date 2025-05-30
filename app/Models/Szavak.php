<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Szavak extends Model
{
    protected $fillable=[
        'id',
        'angol',
        'magyar',
        'temaId'
    ];

    public function szavak(){
        return $this->belongsTo(Szavak::class, 'id');
    }
}
