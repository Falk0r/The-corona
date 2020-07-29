<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblPage
 * 
 * @property int $page_id
 * @property string $page_name
 * @property string $page_slug
 * @property string $page_content
 * @property string $page_layout
 * @property string $banner
 * @property string $status
 * @property string $meta_title
 * @property string $meta_description
 *
 * @package App\Models
 */
class TblPage extends Model
{
	protected $table = 'tbl_page';
	protected $primaryKey = 'page_id';
	public $timestamps = false;

	protected $fillable = [
		'page_name',
		'page_slug',
		'page_content',
		'page_layout',
		'banner',
		'status',
		'meta_title',
		'meta_description'
	];

	public static function getAll(){
		return TblPage::all();
	}
	
	public static function choose($request){
		return TblPage::firstWhere('page_slug', $request);
	 }
}
