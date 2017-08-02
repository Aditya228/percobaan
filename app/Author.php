<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table    = 'Author';
    protected $fillable = ['nama'];
    protected $visible  = ['nama'];
    public $timestamp   = true;

    public function book()
    {
    	return $this->hasMany('App\Book','author_id');
    }
}
