<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingEmail
 * 
 * @property int $id
 * @property string $send_email_from
 * @property string $receive_email_to
 * @property string $smtp_active
 * @property string $smtp_ssl
 * @property string $smtp_host
 * @property string $smtp_port
 * @property string $smtp_username
 * @property string $smtp_password
 *
 * @package App\Models
 */
class TblSettingEmail extends Model
{
	protected $table = 'tbl_setting_email';
	public $timestamps = false;

	protected $hidden = [
		'smtp_password'
	];

	protected $fillable = [
		'send_email_from',
		'receive_email_to',
		'smtp_active',
		'smtp_ssl',
		'smtp_host',
		'smtp_port',
		'smtp_username',
		'smtp_password'
	];
}
