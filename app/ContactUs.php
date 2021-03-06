<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 11:49:33 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Contactus
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App
 */
class Contactus extends Eloquent
{
	protected $table = 'contactus';

	protected $fillable = [
		'name',
		'email',
		'message'
	];
}
