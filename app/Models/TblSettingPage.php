<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingPage
 * 
 * @property int $id
 * @property string $meta_title
 * @property string $meta_description
 * @property string $page_name
 *
 * @package App\Models
 */
class TblSettingPage extends Model
{
	protected $table = 'tbl_setting_pages';
	public $timestamps = false;

	protected $fillable = [
		'meta_title',
		'meta_description',
		'page_name'
	];
}
