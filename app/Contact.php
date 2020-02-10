<?php

namespace App;

use Illuminate\Database\Eloquent\Contact;

class Contact extends Model
{
	public function insert_contact($data2send){
		//data to add is an array.
		DB::table('contact')->insert($data2add);

		return view('contact');
	}
    //
}
