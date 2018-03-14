<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LeitorFormValidation;
use Auth;
use App\Utente;
use Illuminate\Support\Facades\Session;

class UtenteController extends Controller
{
   
	public function store(LeitorFormValidation $request){ 
	    try {
	    	Utente::create([
	    		'nLeitor'=>$request->registo, 
	    		'user_id'=>Auth::user()->id
	    		]);
	    	Session::flash('success','Registo adicionado com sucesso.');
	    }catch (Exception $e) {
	    	Session::flash('error','Registo não foi adicionado.');
	    }

	  return redirect()->back();
	}
}
