<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $table = 'associations';

    protected $fillable = ['title', 'body', 'slug','faculty_id'];

    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }
}
