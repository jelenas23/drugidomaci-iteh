<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laborant;

class Izvestaj extends Model
{
    protected $fillable = [
        'pacijent',
        'datum',
        'komentar',
        'laborant_id'
    ];

    use HasFactory;

    public function laborant(){
        return $this->belongsTo(Laborant::class);
    }

}
