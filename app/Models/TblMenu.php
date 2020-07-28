<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblMenu
 * 
 * @property int $menu_id
 * @property string $menu_type
 * @property int $page_id
 * @property string $menu_name
 * @property string $menu_url
 * @property int $menu_order
 * @property int $menu_parent
 *
 * @package App\Models
 */
class TblMenu extends Model
{
	protected $table = 'tbl_menu';
	protected $primaryKey = 'menu_id';
	public $timestamps = false;

	protected $casts = [
		'page_id' => 'int',
		'menu_order' => 'int',
		'menu_parent' => 'int'
	];

	protected $fillable = [
		'menu_type',
		'page_id',
		'menu_name',
		'menu_url',
		'menu_order',
		'menu_parent'
	];
}
