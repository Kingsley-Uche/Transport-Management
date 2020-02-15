<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\termz;

class PickController extends Controller
{
    //
    public  function get(){
    	
    	$term=termz::all()->toArray();

    	
    	return view('landing',compact('term'));

    }
}
