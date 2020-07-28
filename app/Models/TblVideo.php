<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblVideo
 * 
 * @property int $video_id
 * @property string $video_youtube
 * @property string $video_caption
 * @property int $video_order
 *
 * @package App\Models
 */
class TblVideo extends Model
{
	protected $table = 'tbl_video';
	protected $primaryKey = 'video_id';
	public $timestamps = false;

	protected $casts = [
		'video_order' => 'int'
	];

	protected $fillable = [
		'video_youtube',
		'video_caption',
		'video_order'
	];
}
