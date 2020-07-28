<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingBanner
 * 
 * @property int $id
 * @property string $banner_prevention_detail
 * @property string $banner_doctor_detail
 * @property string $banner_news_detail
 * @property string $banner_category_detail
 * @property string $banner_search
 * @property string $banner_product_detail
 * @property string $banner_cart
 * @property string $banner_checkout
 * @property string $banner_login
 * @property string $banner_registration
 * @property string $banner_forget_password
 * @property string $banner_customer_panel
 *
 * @package App\Models
 */
class TblSettingBanner extends Model
{
	protected $table = 'tbl_setting_banner';
	public $timestamps = false;

	protected $hidden = [
		'banner_forget_password'
	];

	protected $fillable = [
		'banner_prevention_detail',
		'banner_doctor_detail',
		'banner_news_detail',
		'banner_category_detail',
		'banner_search',
		'banner_product_detail',
		'banner_cart',
		'banner_checkout',
		'banner_login',
		'banner_registration',
		'banner_forget_password',
		'banner_customer_panel'
	];
}
