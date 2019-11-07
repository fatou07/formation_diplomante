<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 11:49:33 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Diplome
 * 
 * @property int $iddiplomes
 * @property string $uuid
 * @property string $nom
 * @property int $formateurs_idformateurs
 * 
 * @property \App\Formateur $formateur
 *
 * @package App
 */
class Diplome extends Eloquent
{
	use \App\Helpers\UuidForkey;
	protected $primaryKey = 'iddiplomes';
	public $timestamps = false;

	protected $casts = [
		'formateurs_idformateurs' => 'int'
	];

	protected $fillable = [
		'uuid',
		'nom',
		'formateurs_idformateurs'
	];

	public function formateur()
	{
		return $this->belongsTo(\App\Formateur::class, 'formateurs_idformateurs');
	}
}
