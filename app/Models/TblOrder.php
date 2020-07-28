<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOrder
 * 
 * @property int $id
 * @property int $customer_id
 * @property string $customer_name
 * @property string $customer_email
 * @property string $customer_type
 * @property string $billing_name
 * @property string $billing_email
 * @property string $billing_phone
 * @property string $billing_country
 * @property string $billing_address
 * @property string $billing_state
 * @property string $billing_city
 * @property string $billing_zip
 * @property string $shipping_name
 * @property string $shipping_email
 * @property string $shipping_phone
 * @property string $shipping_country
 * @property string $shipping_address
 * @property string $shipping_state
 * @property string $shipping_city
 * @property string $shipping_zip
 * @property string $payment_date_time
 * @property string $txnid
 * @property string $shipping_cost
 * @property string $coupon_code
 * @property string $coupon_discount
 * @property string $paid_amount
 * @property string $card_number
 * @property string $card_cvv
 * @property string $card_expiry_month
 * @property string $card_expiry_year
 * @property string $bank_information
 * @property string $payment_method
 * @property string $payment_status
 * @property string $order_no
 *
 * @package App\Models
 */
class TblOrder extends Model
{
	protected $table = 'tbl_order';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'customer_name',
		'customer_email',
		'customer_type',
		'billing_name',
		'billing_email',
		'billing_phone',
		'billing_country',
		'billing_address',
		'billing_state',
		'billing_city',
		'billing_zip',
		'shipping_name',
		'shipping_email',
		'shipping_phone',
		'shipping_country',
		'shipping_address',
		'shipping_state',
		'shipping_city',
		'shipping_zip',
		'payment_date_time',
		'txnid',
		'shipping_cost',
		'coupon_code',
		'coupon_discount',
		'paid_amount',
		'card_number',
		'card_cvv',
		'card_expiry_month',
		'card_expiry_year',
		'bank_information',
		'payment_method',
		'payment_status',
		'order_no'
	];
}
