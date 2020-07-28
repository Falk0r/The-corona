<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblDoctor
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $designation
 * @property string $degree
 * @property string $detail
 * @property string $practice_location
 * @property string $advice
 * @property string $facebook
 * @property string $twitter
 * @property string $linkedin
 * @property string $youtube
 * @property string $instagram
 * @property string $email
 * @property string $phone
 * @property string $website
 * @property string $address
 * @property string $video_youtube
 * @property string $photo
 * @property int $doctor_order
 * @property string $status
 * @property string $meta_title
 * @property string $meta_description
 *
 * @package App\Models
 */
class TblDoctor extends Model
{
	protected $table = 'tbl_doctor';
	public $timestamps = false;

	protected $casts = [
		'doctor_order' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'designation',
		'degree',
		'detail',
		'practice_location',
		'advice',
		'facebook',
		'twitter',
		'linkedin',
		'youtube',
		'instagram',
		'email',
		'phone',
		'website',
		'address',
		'video_youtube',
		'photo',
		'doctor_order',
		'status',
		'meta_title',
		'meta_description'
	];
}