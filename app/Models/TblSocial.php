<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSocial
 * 
 * @property int $social_id
 * @property string $social_name
 * @property string $social_url
 * @property string $social_icon
 * @property int $social_status
 * @property int $social_order
 *
 * @package App\Models
 */
class TblSocial extends Model
{
	protected $table = 'tbl_social';
	protected $primaryKey = 'social_id';
	public $timestamps = false;

	protected $casts = [
		'social_status' => 'int',
		'social_order' => 'int'
	];

	protected $fillable = [
		'social_name',
		'social_url',
		'social_icon',
		'social_status',
		'social_order'
	];
}
