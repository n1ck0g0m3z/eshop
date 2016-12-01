<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

    protected $fillable = array('name','surname');
    
    public function book()
    {
        return $this->hasOne('App\Book');
    }
}
