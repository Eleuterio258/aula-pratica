<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Wishlist
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $product_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product|null $product
 * @property User|null $user
 *
 * @package App\Models
 */
class Wishlist extends Model
{
	protected $table = 'wishlist';

	protected $casts = [
		'user_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'product_id'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
