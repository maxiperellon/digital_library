<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 07 May 2019 21:09:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Student
 * 
 * @property int $id
 * @property string $dni
 * @property string $name
 * @property string $career
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $for_hires
 *
 * @package App\Models
 */
class Student extends Eloquent
{
	public $incrementing = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'dni',
		'name',
		'career',
		'email',
		'phone',
		'address'
	];

	public function for_hires()
	{
		return $this->hasMany(\App\Models\ForHire::class, 'id_students');
	}
}
