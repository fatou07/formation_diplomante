<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 29 Aug 2019 11:28:36 +0000.
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
	// use \Illuminate\Database\Eloquent\SoftDeletes;
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
