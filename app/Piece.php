<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 11:49:34 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Piece
 * 
 * @property int $idpieces
 * @property string $uuid
 * @property string $nom
 * @property string $fichier
 * @property int $formateurs_idformateurs
 * 
 * @property \App\Formateur $formateur
 *
 * @package App
 */
class Piece extends Eloquent
{
	use \App\Helpers\UuidForkey;
	protected $primaryKey = 'idpieces';
	public $timestamps = false;

	protected $casts = [
		'formateurs_idformateurs' => 'int'
	];

	protected $fillable = [
		'uuid',
		'nom',
		'fichier',
		'formateurs_idformateurs'
	];

	public function formateur()
	{
		return $this->belongsTo(\App\Formateur::class, 'formateurs_idformateurs');
	}
}
