<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 28 Oct 2019 11:49:33 +0000.
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
 * @property string $adresse
 * @property \Carbon\Carbon $date_naissance
 * @property string $lieu_naissance
 * @property int $cni
 * @property string $diplomes
 * @property string $specialite
 * @property string $matricule
 * @property int $telephone
 * @property string $type_formation
 * @property string $email
 * @property int $services_idservices
 * @property int $specialites_idspecialites
 * 
 * @property \App\Service $service
 * @property \App\Specialite $specialite
 * @property \Illuminate\Database\Eloquent\Collection $pieces
 *
 * @package App
 */
class Formateur extends Eloquent
{
	use \App\Helpers\UuidForkey;
	protected $primaryKey = 'idformateurs';
	public $timestamps = false;

	protected $casts = [
		'cni' => 'int',
		'matricule' => 'string',
		'telephone' => 'int',
		'services_idservices' => 'int',
		'specialites_idspecialites' => 'int'
	];

	protected $dates = [
		'date_naissance'
	];

	protected $fillable = [
		'uuid',
		'nom',
		'prenom',
		'adresse',
		'date_naissance',
		'lieu_naissance',
		'cni',
		'diplomes',
		'specialite',
		'matricule',
		'telephone',
		'type_formation',
		'email',
		'services_idservices',
		'specialites_idspecialites',
	];

	public function service()
	{
		return $this->belongsTo(\App\Service::class, 'services_idservices');
	}

	public function specialite()
	{
		return $this->belongsTo(\App\Specialite::class, 'specialites_idspecialites');
	}

	public function diplomes()
	{
		return $this->hasMany(\App\Diplome::class, 'formateurs_idformateurs');
	}

	public function pieces()
	{
		return $this->hasMany(\App\Piece::class, 'formateurs_idformateurs');
	}
}
