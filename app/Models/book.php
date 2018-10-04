<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = true;
    protected $table = 'book';
    public $fillable = array(
    	'cat_id',
		'book_name',
		'type',
		'feature',
		'book_content',
		'price',
		'author',
		'book_url',
    );
    
}
