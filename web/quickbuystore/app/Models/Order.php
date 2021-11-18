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
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $province
 * @property string $postalcode
 * @property int|null $total_price
 * @property int|null $tax
 * @property int|null $iva
 * @property string $status
 * @property string $order_tacking
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
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
		'total_price' => 'int',
		'tax' => 'int',
		'iva' => 'int'
	];

	protected $fillable = [
		'user_id',
		'fname',
		'lname',
		'email',
		'phone',
		'address',
		'city',
		'province',
		'postalcode',
		'total_price',
		'tax',
		'iva',
		'status',
		'order_tacking'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function order_items()
	{
		return $this->hasMany(OrderItem::class);
	}
}
