<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Storey
 * 
 * @property int $storey_id
 * @property string $perspective_3d_price
 * @property string $floor_plan_price
 * @property string $interior_price
 * @property string $full_set_price
 * @property string $floor_type
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Storey extends Model
{
	protected $table = 'storey';
	protected $primaryKey = 'storey_id';
	public $timestamps = false;

	protected $fillable = [
		'perspective_3d_price',
		'floor_plan_price',
		'interior_price',
		'full_set_price',
		'floor_type'
	];

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
