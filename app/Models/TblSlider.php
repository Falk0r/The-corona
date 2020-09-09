<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TblSlider;


/**
 * Class TblSlider
 * 
 * @property int $id
 * @property string $photo
 * @property string $heading
 * @property string $content
 * @property string $button_text
 * @property string $button_url
 * @property int $slide_order
 * @property string $status
 *
 * @package App\Models
 */
class TblSlider extends Model
{
	protected $table = 'tbl_slider';
	public $timestamps = false;

	protected $casts = [
		'slide_order' => 'int'
	];

	protected $fillable = [
		'photo',
		'heading',
		'content',
		'button_text',
		'button_url',
		'slide_order',
		'status'
	];

	public static function getAll(){
		return TblSlider::all();
	}

	public static function updateOne($request)
	{
		$slide = TblSlider::find($request->id);
		$slide->heading = $request->heading;
		$slide->content = $request->content;
		$slide->button_text = $request->button_text;
		$slide->button_url = $request->button_url;
		$slide->slide_order = $request->slide_order;
		$slide->status = $request->status;
		$slide->save();
		return;
	}
	public static function deleteSlide($id)
	{
		return TblSlider::destroy($id);
	}
	public static function addOne($request)
	{
		//Upload file
		$name = $request->photo->getClientOriginalName();
        $path = $request->photo->move('uploads', $name);

		$slide = new TblSlider;
		$slide->heading = $request->heading;
		$slide->content = $request->content;
		$slide->button_text = $request->button_text;
		$slide->button_url = $request->button_url;
		$slide->slide_order = $request->slide_order;
		$slide->status = $request->status;
		$slide->photo = $name;
		$slide->save();
	}
}
