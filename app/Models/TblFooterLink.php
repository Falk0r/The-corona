<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblFooterLink
 * 
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int $order1
 *
 * @package App\Models
 */
class TblFooterLink extends Model
{
	protected $table = 'tbl_footer_link';
	public $timestamps = false;

	protected $casts = [
		'order1' => 'int'
	];

	protected $fillable = [
		'name',
		'url',
		'order1'
	];
}
