<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderProduct
 * 
 * @property int $op_id
 * @property int $product_id
 * @property int $order_id
 *
 * @package App\Models
 */
class OrderProduct extends Model
{
	protected $table = 'order_products';
	protected $primaryKey = 'op_id';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'order_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'order_id'
	];
}
