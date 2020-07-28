<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblComment
 * 
 * @property int $comment_id
 * @property string $person_name
 * @property string $person_email
 * @property string $person_message
 * @property string $comment_date
 * @property string $comment_time
 * @property int $news_id
 * @property string $comment_status
 *
 * @package App\Models
 */
class TblComment extends Model
{
	protected $table = 'tbl_comment';
	protected $primaryKey = 'comment_id';
	public $timestamps = false;

	protected $casts = [
		'news_id' => 'int'
	];

	protected $fillable = [
		'person_name',
		'person_email',
		'person_message',
		'comment_date',
		'comment_time',
		'news_id',
		'comment_status'
	];
}
