<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 07 May 2019 21:09:07 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Book
 * 
 * @property int $id
 * @property string $isbn
 * @property string $name
 * @property string $publisher
 * @property string $edition
 * @property string $author
 * @property string $category
 * @property bool $condition
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $for_hires
 *
 * @package App\Models
 */
class Book extends Eloquent
{
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'condition' => 'bool'
	];

	protected $fillable = [
		'isbn',
		'name',
		'publisher',
		'edition',
		'author',
		'category',
		'condition'
	];

	public function for_hires()
	{
		return $this->hasMany(\App\Models\ForHire::class, 'id_books');
	}

}
