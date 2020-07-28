<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCustomer
 * 
 * @property int $customer_id
 * @property string $customer_name
 * @property string $customer_email
 * @property string $customer_phone
 * @property int $customer_country_id
 * @property string $customer_address
 * @property string $customer_state
 * @property string $customer_city
 * @property string $customer_zip
 * @property string $customer_password
 * @property string $customer_token
 * @property string $customer_status
 *
 * @package App\Models
 */
class TblCustomer extends Model
{
	protected $table = 'tbl_customer';
	protected $primaryKey = 'customer_id';
	public $timestamps = false;

	protected $casts = [
		'customer_country_id' => 'int'
	];

	protected $hidden = [
		'customer_password',
		'customer_token'
	];

	protected $fillable = [
		'customer_name',
		'customer_email',
		'customer_phone',
		'customer_country_id',
		'customer_address',
		'customer_state',
		'customer_city',
		'customer_zip',
		'customer_password',
		'customer_token',
		'customer_status'
	];
}
