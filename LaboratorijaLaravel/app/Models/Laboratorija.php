<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laborant;

class Laboratorija extends Model
{
    protected $fillable = [
        'naziv',
        'adresa',
        'email',
        'website'
    ];

    use HasFactory;

    public function laboranti(){
        return $this->hasMany(Laborant::class);
    }

}
