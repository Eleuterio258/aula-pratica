<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Imageproduct
 * 
 * @property int $id
 * @property string|null $path
 * @property string|null $name
 * @property int|null $size
 * @property int|null $product_id
 * 
 * @property Product|null $product
 *
 * @package App\Models
 */
class Imageproduct extends Model
{
	protected $table = 'imageproduct';
	public $timestamps = false;

	protected $casts = [
		'size' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'path',
		'name',
		'size',
		'product_id'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
