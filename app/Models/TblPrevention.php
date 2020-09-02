<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblPrevention
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $short_description
 * @property string $photo
 * @property string $meta_title
 * @property string $meta_description
 * @property int $prevention_order
 * @property string $status
 *
 * @package App\Models
 */
class TblPrevention extends Model
{
	protected $table = 'tbl_prevention';
	public $timestamps = false;

	protected $casts = [
		'prevention_order' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'short_description',
		'photo',
		'meta_title',
		'meta_description',
		'prevention_order',
		'status'
	];

	public static function getAll(){
		return TblPrevention::all();
	}
}
