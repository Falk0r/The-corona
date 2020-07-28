<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCategory
 * 
 * @property int $category_id
 * @property string $category_name
 * @property string $category_slug
 * @property int $category_order
 * @property string $category_status
 * @property string $meta_title
 * @property string $meta_description
 *
 * @package App\Models
 */
class TblCategory extends Model
{
	protected $table = 'tbl_category';
	protected $primaryKey = 'category_id';
	public $timestamps = false;

	protected $casts = [
		'category_order' => 'int'
	];

	protected $fillable = [
		'category_name',
		'category_slug',
		'category_order',
		'category_status',
		'meta_title',
		'meta_description'
	];
}