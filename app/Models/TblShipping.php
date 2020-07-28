<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblShipping
 * 
 * @property int $shipping_id
 * @property string $shipping_name
 * @property string $shipping_text
 * @property string $shipping_cost
 * @property int $shipping_order
 * @property string $shipping_status
 *
 * @package App\Models
 */
class TblShipping extends Model
{
	protected $table = 'tbl_shipping';
	protected $primaryKey = 'shipping_id';
	public $timestamps = false;

	protected $casts = [
		'shipping_order' => 'int'
	];

	protected $fillable = [
		'shipping_name',
		'shipping_text',
		'shipping_cost',
		'shipping_order',
		'shipping_status'
	];
}
