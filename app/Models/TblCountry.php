<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblCountry
 * 
 * @property int $country_id
 * @property string $country_name
 *
 * @package App\Models
 */
class TblCountry extends Model
{
	protected $table = 'tbl_country';
	protected $primaryKey = 'country_id';
	public $timestamps = false;

	protected $fillable = [
		'country_name'
	];
}
