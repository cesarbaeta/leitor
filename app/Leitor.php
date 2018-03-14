<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leitor extends Model
{
    protected $fillable=['nLeitor','nome','user_id'];
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
