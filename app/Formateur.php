<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 29 Aug 2019 11:28:36 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Formateur
 * 
 * @property int $idformateurs
 * @property string $uuid
 * @property string $nom
 * @property string $prenom
 * @property \Carbon\Carbon $date_naissance
 * @property string $lieu_naissance
 * @property int $cni

 * @property string $niveaux
 * @property int $matricule
 * @property int $telephone
 * @property int $services_idservices
 * 
 * @property \App\Service $service
 * @property \Illuminate\Database\Eloquent\Collection $pieces
 * @property \Illuminate\Database\Eloquent\Collection $specialites
 *
 * @package App
 */


class Formateur extends Eloquent


{
	// use \Illuminate\Database\Eloquent\SoftDeletes;
	use \App\Helpers\UuidForkey;
	protected $primaryKey = 'idformateurs';
	public $timestamps = false;

	protected $casts = [
		'cni' => 'int',
		'matricule' => 'int',
		'telephone' => 'int',
		'services_idservices' => 'int'
	];

	protected $dates = [
		'date_naissance'
	];

	protected $fillable = [
		'uuid',
		'nom',
		'prenom',
		'date_naissance',
		'lieu_naissance',
		'cni',
		'diplomes',
		'niveaux',
		'matricule',
		'telephone',
		'services_idservices'
	];

	public function service()
	{
		return $this->belongsTo(\App\Service::class, 'services_idservices');
	}

	public function diplomes()
	{
		return $this->hasMany(\App\Diplome::class, 'formateurs_idformateurs');
	}

	public function pieces()
	{
		return $this->hasMany(\App\Piece::class, 'formateurs_idformateurs');
	}

	public function specialite()
	{
		return $this->belongsTo(\App\Specialite::class, 'specialites_idspecialites');
	}
}
