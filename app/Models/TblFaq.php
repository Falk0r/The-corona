<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblFaq
 * 
 * @property int $faq_id
 * @property string $faq_title
 * @property string $faq_content
 * @property int $faq_order
 *
 * @package App\Models
 */
class TblFaq extends Model
{
	protected $table = 'tbl_faq';
	protected $primaryKey = 'faq_id';
	public $timestamps = false;

	protected $casts = [
		'faq_order' => 'int'
	];

	protected $fillable = [
		'faq_title',
		'faq_content',
		'faq_order'
	];
}
