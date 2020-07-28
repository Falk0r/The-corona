<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOrderDelivery
 * 
 * @property int $delivery_id
 * @property string $delivery_status
 * @property string $delivery_note
 * @property string $delivery_created
 * @property string $order_no
 *
 * @package App\Models
 */
class TblOrderDelivery extends Model
{
	protected $table = 'tbl_order_delivery';
	protected $primaryKey = 'delivery_id';
	public $timestamps = false;

	protected $fillable = [
		'delivery_status',
		'delivery_note',
		'delivery_created',
		'order_no'
	];
}
