<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 25 Aug 2019 10:49:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContactUs
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class ContactUs extends Eloquent
{
	protected $table = 'contact_us';
}
