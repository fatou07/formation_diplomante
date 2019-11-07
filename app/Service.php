<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 11:49:34 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Service
 * 
 * @property int $idservices
 * @property string $uuid
 * @property string $nom
 * @property string $adresse
 * @property int $telephone
 * 
 * @property \Illuminate\Database\Eloquent\Collection $formateurs
 *
 * @package App
 */
class Service extends Eloquent
{
	use \App\Helpers\UuidForkey;
	protected $primaryKey = 'idservices';
	public $timestamps = false;

	protected $casts = [
		'telephone' => 'int'
	];

	protected $fillable = [
		'uuid',
		'nom',
		'adresse',
		'telephone'
	];

	public function formateurs()
	{
		return $this->hasMany(\App\Formateur::class, 'services_idservices');
	}
}
