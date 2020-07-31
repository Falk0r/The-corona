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

	public static function getAllTime(){
		return TblNews::all()->sortByDesc('news_order');	
	}

	public static function getAllTimePaginate(){
		return TblNews::paginate(5);	
	}

	public static function choose($request){
		return TblNews::find($request->id);
	 }

	public static function getByCat($cat_slug){
		return TblNews::where('category_slug', $cat_slug)->paginate(5);
	} 

	public static function getBySearch($request){
		return TblNews::where('meta_description','LIKE', '%'.$request->search_string.'%')->paginate(5);
	}

	public static function searchTitle($request){
		return $searchTitle = "Search by : $request";
	}
	
	public function category(){
		return $this->belongsToMany('App\Models\TblCategory');
	}
	
	
}
