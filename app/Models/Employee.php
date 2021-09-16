<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * 
 * @property int $id
 * @property string $name
 * @property string $date_of_birth
 * @property string $location
 * @property string $email
 * @property string $username
 * @property string $timezone
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'employees';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'name',
		'date_of_birth',
		'location',
		'email',
		'username',
		'timezone'
	];
}
