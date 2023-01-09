<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laboratorija;
use App\Models\Izvestaj;

class Laborant extends Model
{
    use HasFactory;

    public function laboratorija(){
        return $this->belongsTo(Laboratorija::class);
    }

    public function izvestaji(){
        return $this->hasMany(Izvestaj::class);
    }


}
