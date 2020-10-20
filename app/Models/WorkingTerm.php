<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingTerm extends Model
{
    use HasFactory;

    public function scopeActive($query){
        return $query->where('active',1);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bonuses()
    {
        return $this->hasMany(Bonus::class);
    }

    public function employment()
    {
        return $this->hasOne(Employment::class);
    }
}
