<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingFooter
 * 
 * @property int $id
 * @property string $footer_address
 * @property string $footer_email
 * @property string $footer_phone
 * @property string $copyright
 *
 * @package App\Models
 */
class TblSettingFooter extends Model
{
	protected $table = 'tbl_setting_footer';
	public $timestamps = false;

	protected $fillable = [
		'footer_address',
		'footer_email',
		'footer_phone',
		'copyright'
	];
}
