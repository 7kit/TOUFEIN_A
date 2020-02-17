<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['id_env', 'id_rec', 'motif','montant'];

	public function envoyeurname() {

		return User::where('id',$this->id_env)->first()->name;
	}

	public function recepteurname() {

		return User::where('id',$this->id_rec)->first()->name;
	}
}
