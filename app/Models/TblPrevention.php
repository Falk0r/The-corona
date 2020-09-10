<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblPrevention
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $short_description
 * @property string $photo
 * @property string $meta_title
 * @property string $meta_description
 * @property int $prevention_order
 * @property string $status
 *
 * @package App\Models
 */
class TblPrevention extends Model
{
	protected $table = 'tbl_prevention';
	public $timestamps = false;

	protected $casts = [
		'prevention_order' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'short_description',
		'photo',
		'meta_title',
		'meta_description',
		'prevention_order',
		'status'
	];

	public static function getAll(){
		return TblPrevention::all();
	}

	public static function choose($request){
		return TblPrevention::find($request->id);
	}

	public static function getBySlug($preventions_slug){
		$result = TblPrevention::where('slug', $preventions_slug)->first();
		return $result;
	}
	public static function updateOne($request)
	{
		$prevention = TblPrevention::find($request->id);
		$prevention->name = $request->name;
		$prevention->slug = $request->slug;
		$prevention->description = $request->description;
		$prevention->short_description = $request->short_description;
		$prevention->prevention_order = $request->prevention_order;
		$prevention->meta_title = $request->meta_title;
		$prevention->meta_description = $request->meta_description;
		$prevention->prevention_order = $request->prevention_order;
		$prevention->status = $request->status;
		$prevention->save();
		return;
	}
	public static function deletePrevention($id)
	{
		return TblPrevention::destroy($id);
	}
	public static function addOne($request)
	{
		//Upload file
		$name = $request->photo->getClientOriginalName();
        $path = $request->photo->move('uploads', $name);

		$prevention = new Tblprevention;
		$prevention->name = $request->name;
		$prevention->slug = $request->slug;
		$prevention->short_description = $request->short_description;
		$prevention->description = $request->description;
		$prevention->meta_title = $request->meta_title;
		$prevention->meta_description = $request->meta_description;
		$prevention->prevention_order = $request->prevention_order;
		$prevention->status = $request->status;
		$prevention->photo = $name;
		$prevention->save();
	}

}
