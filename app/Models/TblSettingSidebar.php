<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingSidebar
 * 
 * @property int $id
 * @property int $total_recent_news
 *
 * @package App\Models
 */
class TblSettingSidebar extends Model
{
	protected $table = 'tbl_setting_sidebar';
	public $timestamps = false;

	protected $casts = [
		'total_recent_news' => 'int'
	];

	protected $fillable = [
		'total_recent_news'
	];
}
