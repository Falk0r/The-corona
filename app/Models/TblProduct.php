<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblProduct
 * 
 * @property int $product_id
 * @property string $product_name
 * @property string $product_slug
 * @property string $product_old_price
 * @property string $product_current_price
 * @property int $product_stock
 * @property string $product_content
 * @property string $product_content_short
 * @property string $product_return_policy
 * @property string $product_featured_photo
 * @property int $product_order
 * @property string $product_status
 * @property string $meta_title
 * @property string $meta_description
 *
 * @package App\Models
 */
class TblProduct extends Model
{
	protected $table = 'tbl_product';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $casts = [
		'product_stock' => 'int',
		'product_order' => 'int'
	];

	protected $fillable = [
		'product_name',
		'product_slug',
		'product_old_price',
		'product_current_price',
		'product_stock',
		'product_content',
		'product_content_short',
		'product_return_policy',
		'product_featured_photo',
		'product_order',
		'product_status',
		'meta_title',
		'meta_description'
	];

	public static function getAll(){
		return TblProduct::all();
	}

	public static function choose($request){
		return TblProduct::find($request->id);
 	}
}
