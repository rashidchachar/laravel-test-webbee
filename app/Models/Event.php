<?php

namespace App\Models;
use App\Models\Workshopp;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function workshops(){
        return $this->hasMany(Workshop::class, 'event_id');

    }
}
