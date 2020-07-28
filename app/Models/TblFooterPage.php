<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblFooterPage
 * 
 * @property int $id
 * @property int $page_id
 * @property int $order1
 *
 * @package App\Models
 */
class TblFooterPage extends Model
{
	protected $table = 'tbl_footer_page';
	public $timestamps = false;

	protected $casts = [
		'page_id' => 'int',
		'order1' => 'int'
	];

	protected $fillable = [
		'page_id',
		'order1'
	];
}
