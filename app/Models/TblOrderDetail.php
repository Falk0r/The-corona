<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOrderDetail
 * 
 * @property int $order_detail_id
 * @property int $order_id
 * @property int $product_id
 * @property string $product_name
 * @property float $product_price
 * @property int $product_qty
 * @property string $payment_status
 * @property string $order_no
 *
 * @package App\Models
 */
class TblOrderDetail extends Model
{
	protected $table = 'tbl_order_detail';
	protected $primaryKey = 'order_detail_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'product_price' => 'float',
		'product_qty' => 'int'
	];

	protected $fillable = [
		'order_id',
		'product_id',
		'product_name',
		'product_price',
		'product_qty',
		'payment_status',
		'order_no'
	];
}
