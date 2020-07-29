<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblSettingHome
 * 
 * @property int $id
 * @property string $meta_title
 * @property string $meta_description
 * @property string $header_type
 * @property string $header_type_image_heading
 * @property string $header_type_image_content
 * @property string $header_type_image_btn_text
 * @property string $header_type_image_btn_url
 * @property string $header_type_image_photo
 * @property string $header_type_video_heading
 * @property string $header_type_video_content
 * @property string $header_type_video_btn_text
 * @property string $header_type_video_btn_url
 * @property string $header_type_video_yt_url
 * @property string $symptom_title
 * @property string $symptom_subtitle
 * @property string $symptom_status
 * @property string $special_title
 * @property string $special_subtitle
 * @property string $special_content
 * @property string $special_btn_text
 * @property string $special_btn_url
 * @property string $special_yt_video
 * @property string $special_bg
 * @property string $special_video_bg
 * @property string $special_status
 * @property string $prevention_title
 * @property string $prevention_subtitle
 * @property string $prevention_status
 * @property string $doctor_title
 * @property string $doctor_subtitle
 * @property string $doctor_status
 * @property string $appointment_title
 * @property string $appointment_text
 * @property string $appointment_btn_text
 * @property string $appointment_btn_url
 * @property string $appointment_bg
 * @property string $appointment_status
 * @property string $latest_news_title
 * @property string $latest_news_subtitle
 * @property string $latest_news_status
 * @property string $newsletter_title
 * @property string $newsletter_text
 * @property string $newsletter_bg
 * @property string $newsletter_status
 * @property string $outbreak_title
 * @property string $outbreak_subtitle
 * @property string $outbreak_status
 * @property string $outbreak_icon1
 * @property string $outbreak_icon2
 * @property string $outbreak_icon3
 * @property string $countrywise_title
 * @property string $countrywise_subtitle
 * @property string $countrywise_status
 *
 * @package App\Models
 */
class TblSettingHome extends Model
{
	protected $table = 'tbl_setting_home';
	public $timestamps = false;

	protected $fillable = [
		'meta_title',
		'meta_description',
		'header_type',
		'header_type_image_heading',
		'header_type_image_content',
		'header_type_image_btn_text',
		'header_type_image_btn_url',
		'header_type_image_photo',
		'header_type_video_heading',
		'header_type_video_content',
		'header_type_video_btn_text',
		'header_type_video_btn_url',
		'header_type_video_yt_url',
		'symptom_title',
		'symptom_subtitle',
		'symptom_status',
		'special_title',
		'special_subtitle',
		'special_content',
		'special_btn_text',
		'special_btn_url',
		'special_yt_video',
		'special_bg',
		'special_video_bg',
		'special_status',
		'prevention_title',
		'prevention_subtitle',
		'prevention_status',
		'doctor_title',
		'doctor_subtitle',
		'doctor_status',
		'appointment_title',
		'appointment_text',
		'appointment_btn_text',
		'appointment_btn_url',
		'appointment_bg',
		'appointment_status',
		'latest_news_title',
		'latest_news_subtitle',
		'latest_news_status',
		'newsletter_title',
		'newsletter_text',
		'newsletter_bg',
		'newsletter_status',
		'outbreak_title',
		'outbreak_subtitle',
		'outbreak_status',
		'outbreak_icon1',
		'outbreak_icon2',
		'outbreak_icon3',
		'countrywise_title',
		'countrywise_subtitle',
		'countrywise_status'
	];

	public static function giveData(){
		return TblPage::find(1);
	}
	
}
