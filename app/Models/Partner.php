<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = ['company', 'description', 'position','careerfair_id', 'img', 'status'];

    public function AOCF()
    {
        return $this->belongsTo(Careerfair::class);
    }
}
