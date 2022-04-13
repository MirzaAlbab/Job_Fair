<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = ['company', 'description', 'position','careerfair_id', 'img', 'status'];

    public function AOCF()
    {
        return $this->hasOne(Careerfair::class, 'id', 'careerfair_id');
    }
    
}
