<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    
    protected $fillable = ['member_id','book_id','total'];
    
    public function books()
    {
        return $this->belongsTo('App\Book');
    }
}
