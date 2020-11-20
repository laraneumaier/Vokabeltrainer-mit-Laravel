<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocab extends Model
{
    use HasFactory;

    public function Lernsets(){
        return $this->belongsTo(Lernset::class);
    }
}
