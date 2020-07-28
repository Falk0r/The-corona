<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblNews
 * 
 * @property int $news_id
 * @property string $news_title
 * @property string $news_slug
 * @property string $news_content
 * @property string $news_content_short
 * @property string $news_date
 * @property string $photo
 * @property int $category_id
 * @property int $news_order
 * @property string $news_status
 * @property string $meta_title
 * @property string $meta_description
 *
 * @package App\Models
 */
class TblNews extends Model
{
	protected $table = 'tbl_news';
	protected $primaryKey = 'news_id';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'news_order' => 'int'
	];

	protected $fillable = [
		'news_title',
		'news_slug',
		'news_content',
		'news_content_short',
		'news_date',
		'photo',
		'category_id',
		'news_order',
		'news_status',
		'meta_title',
		'meta_description'
	];
}
