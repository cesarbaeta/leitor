<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LeitorFormValidation;
use Auth;
use App\Leitor;
class LeitorController extends Controller
{
    public function store(LeitorFormValidation $request){ 
    		Leitor::create([
    			'nLeitor'=>$request->registo, 
    			'user_id'=>Auth::user()->id
    		]);
    		return redirect()->back();
    }
}
