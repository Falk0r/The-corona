<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingContact
 * 
 * @property int $id
 * @property string $contact_address
 * @property string $contact_phone
 * @property string $contact_email
 *
 * @package App\Models
 */
class TblSettingContact extends Model
{
	protected $table = 'tbl_setting_contact';
	public $timestamps = false;

	protected $fillable = [
		'contact_address',
		'contact_phone',
		'contact_email'
	];
}
