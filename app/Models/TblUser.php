<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblUser
 * 
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $password
 * @property string $photo
 * @property string $token
 * @property string $role
 * @property string $status
 *
 * @package App\Models
 */
class TblUser extends Model
{
	protected $table = 'tbl_user';
	public $timestamps = false;

	protected $hidden = [
		'password',
		'token'
	];

	protected $fillable = [
		'full_name',
		'email',
		'password',
		'photo',
		'token',
		'role',
		'status'
	];
}
