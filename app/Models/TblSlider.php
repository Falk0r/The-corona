<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSlider
 * 
 * @property int $id
 * @property string $photo
 * @property string $heading
 * @property string $content
 * @property string $button_text
 * @property string $button_url
 * @property int $slide_order
 * @property string $status
 *
 * @package App\Models
 */
class TblSlider extends Model
{
	protected $table = 'tbl_slider';
	public $timestamps = false;

	protected $casts = [
		'slide_order' => 'int'
	];

	protected $fillable = [
		'photo',
		'heading',
		'content',
		'button_text',
		'button_url',
		'slide_order',
		'status'
	];
}
