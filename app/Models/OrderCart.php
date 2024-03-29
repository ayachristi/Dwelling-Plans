<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderCart
 * 
 * @property int $oc_id
 * @property int $order_id
 * @property int $cart_id
 *
 * @package App\Models
 */
class OrderCart extends Model
{
	protected $table = 'order_carts';
	protected $primaryKey = 'oc_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'cart_id' => 'int'
	];

	protected $fillable = [
		'order_id',
		'cart_id'
	];
}
