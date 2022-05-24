<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'time', 'link','location', 'img','status'];


    public function getDateStartAttribute($value)
    {
    return Carbon::parse($value)->format('Y-m-d\TH:i');
    }

    public function AOCF()
    {
        return $this->hasOne(Careerfair::class, 'id', 'careerfair_id');
    }

}
