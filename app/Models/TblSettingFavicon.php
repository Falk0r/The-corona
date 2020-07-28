<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingFavicon
 * 
 * @property int $id
 * @property string $favicon
 *
 * @package App\Models
 */
class TblSettingFavicon extends Model
{
	protected $table = 'tbl_setting_favicon';
	public $timestamps = false;

	protected $fillable = [
		'favicon'
	];
}
