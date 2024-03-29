<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $product_id
 * @property int $storey_id
 * @property string $design
 * @property string $description
 * @property string $lot_area
 * @property string|null $image_3d
 * @property string|null $floor_plan_image
 * @property string|null $interior_image
 * @property string $title
 * 
 * @property Storey $storey
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $casts = [
		'storey_id' => 'int'
	];

	protected $fillable = [
		'storey_id',
		'design',
		'description',
		'lot_area',
		'image_3d',
		'floor_plan_image',
		'interior_image',
		'title'
	];

	public function storey()
	{
		return $this->belongsTo(Storey::class);
	}
}
