<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $delivery_id
 * @property int|null $address_id
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property string $phone
 * @property string|null $frete
 * @property string|null $subtotal
 * @property int|null $total_price
 * @property string $order_tacking
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Address|null $address
 * @property User|null $user
 * @property Collection|OrderItem[] $order_items
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int',
		'delivery_id' => 'int',
		'address_id' => 'int',
		'total_price' => 'int'
	];

	protected $fillable = [
		'user_id',
		'delivery_id',
		'address_id',
		'fname',
		'lname',
		'email',
		'phone',
		'frete',
		'subtotal',
		'total_price',
		'order_tacking',
		'status'
	];

	public function address()
	{
		return $this->belongsTo(Address::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'delivery_id');
	}

	public function order_items()
	{
		return $this->hasMany(OrderItem::class);
	}
}
