<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Notule extends Model
{
    protected $table = 'notulen';

    protected $fillable = ['date', 'url'];

    protected $dates = ['created_at', 'updated_at', 'date'];

    public function setDateAttribute($value){
        $this->attributes['date'] = Carbon::parse($value)->format('Y-m-d');
    }
    public function getDateAttribute(){
        return Carbon::parse($this->attributes['date'])->format('d-m-Y');
    }
}
