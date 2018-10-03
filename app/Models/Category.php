<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'category';
	public $fillable = array(
		'cat_name',
		'alias',
		'parent_id',
	);
	public $timestamps = true;
}
