<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function workingTerm(){
        return $this->belongsTo(WorkingTerm::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
