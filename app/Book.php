<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table    = 'books';
    protected $fillable = ['nama','author_id','amount','cover'];
    protected $visible  = ['nama','author_id','amount','cover'];
    public $timestamp   = true;

    public function author()
    {
    	return $this->belongsTo('App\Author','author_id');
    }
}
