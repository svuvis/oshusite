<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = ['title', 'starttime', 'endtime', 'place', 'body'];

    protected $dates = ['created_at', 'updated_at', 'starttime', 'endtime'];

    public function setStarttimeAttribute($value){
        $this->attributes['starttime'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }
    public function setEndtimeAttribute($value){
        $this->attributes['endtime'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }

}
