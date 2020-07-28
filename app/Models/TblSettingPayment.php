<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingPayment
 * 
 * @property int $id
 * @property string $paypal_email
 * @property string $stripe_public_key
 * @property string $stripe_secret_key
 *
 * @package App\Models
 */
class TblSettingPayment extends Model
{
	protected $table = 'tbl_setting_payment';
	public $timestamps = false;

	protected $hidden = [
		'stripe_secret_key'
	];

	protected $fillable = [
		'paypal_email',
		'stripe_public_key',
		'stripe_secret_key'
	];
}
