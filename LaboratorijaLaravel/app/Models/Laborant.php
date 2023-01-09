<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laboratorija;
use App\Models\Izvestaj;

class Laborant extends Model
{
    protected $fillable = [
        'ime',
        'prezime',
        'pol',
        'email',
        'laboratorija_id'
    ];
    
    use HasFactory;

    public function laboratorija(){
        return $this->belongsTo(Laboratorija::class);
    }

    public function izvestaji(){
        return $this->hasMany(Izvestaj::class);
    }


}
