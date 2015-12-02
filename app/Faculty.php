<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';

    protected $fillable = ['title', 'slug'];

    public function associations()
    {
        return $this->hasMany('App\Association');
    }
}
