<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 * 
 * @property int $id
 * @property int $user_id
 * @property string|null $firstname
 * @property string|null $lastName
 * @property string|null $phone
 * @property string|null $image
 * @property Carbon|null $created_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Person extends Model
{
	protected $table = 'person';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'firstname',
		'lastName',
		'phone',
		'image'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
