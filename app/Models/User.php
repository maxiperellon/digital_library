<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 17 May 2019 20:49:43 +0000.
 */

namespace App\Models;

//use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $for_hires
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	public $incrementing = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function for_hires()
	{
		return $this->hasMany(\App\Models\ForHire::class, 'id_users');
	}
}
