<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSubscriber
 * 
 * @property int $subs_id
 * @property string $subs_email
 * @property string $subs_date
 * @property string $subs_date_time
 * @property string $subs_hash
 * @property int $subs_active
 *
 * @package App\Models
 */
class TblSubscriber extends Model
{
	protected $table = 'tbl_subscriber';
	protected $primaryKey = 'subs_id';
	public $timestamps = false;

	protected $casts = [
		'subs_active' => 'int'
	];

	protected $fillable = [
		'subs_email',
		'subs_date',
		'subs_date_time',
		'subs_hash',
		'subs_active'
	];
}
