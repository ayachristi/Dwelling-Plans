<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Variant
 * 
 * @property int $cart_id
 * @property int $storey_id
 *
 * @package App\Models
 */
class Variant extends Model
{
	protected $table = 'variants';
	protected $primaryKey = 'cart_id';
	public $timestamps = false;

	protected $casts = [
		'storey_id' => 'int'
	];

	protected $fillable = [
		'storey_id'
	];
}
