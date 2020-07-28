<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCoupon
 * 
 * @property int $coupon_id
 * @property string $coupon_code
 * @property string $coupon_type
 * @property string $coupon_discount
 * @property int $coupon_maximum_use
 * @property int $coupon_existing_use
 * @property string $coupon_start_date
 * @property string $coupon_end_date
 * @property string $coupon_status
 *
 * @package App\Models
 */
class TblCoupon extends Model
{
	protected $table = 'tbl_coupon';
	protected $primaryKey = 'coupon_id';
	public $timestamps = false;

	protected $casts = [
		'coupon_maximum_use' => 'int',
		'coupon_existing_use' => 'int'
	];

	protected $fillable = [
		'coupon_code',
		'coupon_type',
		'coupon_discount',
		'coupon_maximum_use',
		'coupon_existing_use',
		'coupon_start_date',
		'coupon_end_date',
		'coupon_status'
	];
}
