<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;

    protected $fillable = ['entreprise_id', 'question_id', 'score'];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

