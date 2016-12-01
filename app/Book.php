<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = array('title','isbn','cover','price','author_id');
    
    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
