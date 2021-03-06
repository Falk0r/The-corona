<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

	public static function getCommentsByArticle($news_slug){
		$article = TblNews::where('news_slug', $news_slug)->first();
		$news_id = $article->news_id;
		$result = TblComment::where('news_id', $news_id)->get();
		return $result;
	}

	public static function addComment($validateCommentForm){
		$comment = new TblComment;
		$comment->person_name = $validateCommentForm['person_name'];
		$comment->person_email = $validateCommentForm['person_email'];
		$comment->person_message = $validateCommentForm['person_message'];
		$comment->comment_date = Carbon::now()->format('Y-m-d');
		$comment->comment_time = Carbon::now()->format('H:i:s A');
		$comment->news_id = $validateCommentForm['news_id'];
		$comment->comment_status = "Approved";
		$comment->save();
		return;
	}

}
