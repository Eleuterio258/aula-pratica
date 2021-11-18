<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	protected $table = 'wishlist';


	protected $fillable = ['product_id','user_id'];

	public function products()
	{
		return $this->belongsTo(Product::class, 'product_id','id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}