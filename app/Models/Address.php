<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $id
 * @property int $user_id
 * @property string|null $province
 * @property string|null $city
 * @property string|null $street
 * @property string|null $address
 * @property string|null $postalcode
 * @property string|null $reference
 * @property string|null $Latitude
 * @property string|null $Longitude
 * 
 * @property User $user
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'addresses';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'province',
		'city',
		'street',
		'address',
		'postalcode',
		'reference',
		'Latitude',
		'Longitude'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}
