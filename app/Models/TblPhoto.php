<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblPhoto
 * 
 * @property int $photo_id
 * @property string $photo_name
 * @property string $photo_caption
 * @property int $photo_order
 *
 * @package App\Models
 */
class TblPhoto extends Model
{
	protected $table = 'tbl_photo';
	protected $primaryKey = 'photo_id';
	public $timestamps = false;

	protected $casts = [
		'photo_order' => 'int'
	];

	protected $fillable = [
		'photo_name',
		'photo_caption',
		'photo_order'
	];
}
