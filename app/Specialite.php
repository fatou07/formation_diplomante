<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 11:49:34 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Specialite
 * 
 * @property int $idspecialites
 * @property string $uuid
 * @property string $nom
 * 
 * @property \Illuminate\Database\Eloquent\Collection $formateurs
 *
 * @package App
 */
class Specialite extends Eloquent
{
	use \App\Helpers\UuidForkey;
	protected $primaryKey = 'idspecialites';
	public $timestamps = false;

	protected $fillable = [
		'uuid',
		'nom'
	];

	public function formateurs()
	{
		return $this->hasMany(\App\Formateur::class, 'specialites_idspecialites');
	}
}
