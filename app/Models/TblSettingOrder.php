<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingOrder
 * 
 * @property int $id
 * @property string $company_information
 *
 * @package App\Models
 */
class TblSettingOrder extends Model
{
	protected $table = 'tbl_setting_order';
	public $timestamps = false;

	protected $fillable = [
		'company_information'
	];
}
