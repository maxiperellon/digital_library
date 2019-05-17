<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 07 May 2019 21:07:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ForHire
 * 
 * @property int $id
 * @property int $id_students
 * @property int $id_books
 * @property int $id_users
 * 
 * @property \App\Models\Book $book
 * @property \App\Models\Student $student
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class ForHire extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_students' => 'int',
		'id_books' => 'int',
		'id_users' => 'int'
	];

	protected $fillable = [
		'id_students',
		'id_books',
		'id_users'
	];

	public function book()
	{
		return $this->belongsTo(\App\Models\Book::class, 'id_books');
	}

	public function student()
	{
		return $this->belongsTo(\App\Models\Student::class, 'id_students');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id_users');
	}
}
