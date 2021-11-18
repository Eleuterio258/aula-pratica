<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 * 
 * @property int $id
 * @property int|null $product_id
 * @property int|null $order_id
 * @property int $quantity
 * @property float $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Order|null $order
 * @property Product|null $product
 *
 * @package App\Models
 */
class OrderItem extends Model
{
	protected $table = 'order_items';

	protected $casts = [
		'product_id' => 'int',
		'order_id' => 'int',
		'quantity' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'product_id',
		'order_id',
		'quantity',
		'price'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
