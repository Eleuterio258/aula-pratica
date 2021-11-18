<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $fname
 * @property string|null $lname
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $province
 * @property string|null $postalcode
 * 
 * @property Collection|Cart[] $carts
 * @property Collection|Order[] $orders
 * @property Collection|Role[] $roles
 * @property Collection|Wishlist[] $wishlists
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'fname',
		'lname',
		'phone',
		'address',
		'city',
		'province',
		'postalcode'
	];

	public function carts()
	{
		return $this->hasMany(Cart::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	public function roles()
	{
		return $this->belongsToMany(Role::class)
					->withPivot('id')
					->withTimestamps();
	}

	public function wishlists()
	{
		return $this->hasMany(Wishlist::class);
	}
}
