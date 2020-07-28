<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblFile
 * 
 * @property int $file_id
 * @property string $file_title
 * @property string $file_name
 *
 * @package App\Models
 */
class TblFile extends Model
{
	protected $table = 'tbl_file';
	protected $primaryKey = 'file_id';
	public $timestamps = false;

	protected $fillable = [
		'file_title',
		'file_name'
	];
}
