<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property int|null $brand_id
 * @property int $category_id
 * @property string $name
 * @property string $price
 * @property int|null $old_price
 * @property string|null $description
 * @property int $stock
 * @property float|null $rating
 * @property string|null $is_new
 * @property string|null $sku
 * @property int|null $is_hot
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $image
 * 
 * @property Brand|null $brand
 * @property Category $category
 * @property Collection|Cart[] $carts
 * @property Collection|Imageproduct[] $imageproducts
 * @property Collection|OrderItem[] $order_items
 * @property Collection|Wishlist[] $wishlists
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';

	protected $casts = [
		'brand_id' => 'int',
		'category_id' => 'int',
		'old_price' => 'int',
		'stock' => 'int',
		'rating' => 'float',
		'is_hot' => 'int'
	];

	protected $fillable = [
		'brand_id',
		'category_id',
		'name',
		'price',
		'old_price',
		'description',
		'stock',
		'rating',
		'is_new',
		'sku',
		'is_hot',
		'image'
	];

	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function carts()
	{
		return $this->hasMany(Cart::class);
	}

	public function imageproducts()
	{
		return $this->hasMany(Imageproduct::class);
	}

	public function order_items()
	{
		return $this->hasMany(OrderItem::class);
	}

	public function wishlists()
	{
		return $this->hasMany(Wishlist::class);
	}
}
