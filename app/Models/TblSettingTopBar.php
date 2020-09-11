<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingTopBar
 * 
 * @property int $id
 * @property string $top_bar_email
 * @property string $top_bar_phone
 *
 * @package App\Models
 */
class TblSettingTopBar extends Model
{
	protected $table = 'tbl_setting_top_bar';
	public $timestamps = false;

	protected $fillable = [
		'top_bar_email',
		'top_bar_phone'
	];

	public static function getAll(){
		return TblSettingTopBar::find(1);
	}
}
