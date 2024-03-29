<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property string $image_url
 * @property string|null $icon
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $fillable = [
		'name',
		'image_url',
		'icon'
	];

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
