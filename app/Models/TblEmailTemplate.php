<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblEmailTemplate
 * 
 * @property int $et_id
 * @property string $et_subject
 * @property string $et_content
 * @property string $et_name
 *
 * @package App\Models
 */
class TblEmailTemplate extends Model
{
	protected $table = 'tbl_email_template';
	protected $primaryKey = 'et_id';
	public $timestamps = false;

	protected $fillable = [
		'et_subject',
		'et_content',
		'et_name'
	];
}
