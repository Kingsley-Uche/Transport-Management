<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\location;

class TerminalsController extends Controller
{
    //
   public  function get(){
    	$term=select::all();
    	return view('landing')->with('t',$terms);

    }

    
}
