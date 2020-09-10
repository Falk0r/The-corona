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

	public static function getAll(){
		return TblDoctor::all();
	}

	public static function choose($request){
		return TblDoctor::find($request->id);
	 }
	
	 public static function updateOne($request)
	{
		$doctor = TblDoctor::find($request->id);
		$doctor->name = $request->name;
		$doctor->slug = $request->slug;
		$doctor->designation = $request->designation;
		$doctor->degree = $request->degree;
		$doctor->detail = $request->detail;
		$doctor->practice_location = $request->practice_location;
		$doctor->advice = $request->advice;
		$doctor->facebook = $request->facebook;
		$doctor->twitter = $request->twitter;
		$doctor->linkedin = $request->linkedin;
		$doctor->youtube = $request->youtube;
		$doctor->instagram = $request->instagram;
		$doctor->email = $request->email;
		$doctor->phone = $request->phone;
		$doctor->website = $request->website;
		$doctor->address = $request->address;
		$doctor->video_youtube = $request->video_youtube;
		$doctor->doctor_order = $request->doctor_order;
		$doctor->status = $request->status;
		$doctor->meta_title = $request->meta_title;
		$doctor->meta_description = $request->meta_description;
		$doctor->save();
		return;
	}
	public static function deleteDoctor($id)
	{
		return TblDoctor::destroy($id);
	}
	public static function addOne($request)
	{
		//Upload file
		$name = $request->photo->getClientOriginalName();
        $path = $request->photo->move('uploads', $name);

		$doctor = new TblDoctor;
		$doctor->name = $request->name;
		$doctor->slug = $request->slug;
		$doctor->designation = $request->designation;
		$doctor->degree = $request->degree;
		$doctor->detail = $request->detail;
		$doctor->practice_location = $request->practice_location;
		$doctor->advice = $request->advice;
		$doctor->facebook = $request->facebook;
		$doctor->twitter = $request->twitter;
		$doctor->linkedin = $request->linkedin;
		$doctor->youtube = $request->youtube;
		$doctor->instagram = $request->instagram;
		$doctor->email = $request->email;
		$doctor->phone = $request->phone;
		$doctor->website = $request->website;
		$doctor->address = $request->address;
		$doctor->video_youtube = $request->video_youtube;
		$doctor->doctor_order = $request->doctor_order;
		$doctor->status = $request->status;
		$doctor->meta_title = $request->meta_title;
		$doctor->meta_description = $request->meta_description;
		$doctor->photo = $name;
		$doctor->save();
	}

}
