<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSymptom
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $photo
 * @property int $symptom_order
 * @property string $status
 *
 * @package App\Models
 */
class TblSymptom extends Model
{
	protected $table = 'tbl_symptom';
	public $timestamps = false;

	protected $casts = [
		'symptom_order' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'photo',
		'symptom_order',
		'status'
	];
}
