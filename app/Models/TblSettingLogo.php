<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingLogo
 * 
 * @property int $id
 * @property string $logo
 * @property string $logo_admin
 *
 * @package App\Models
 */
class TblSettingLogo extends Model
{
	protected $table = 'tbl_setting_logo';
	public $timestamps = false;

	protected $fillable = [
		'logo',
		'logo_admin'
	];
}
