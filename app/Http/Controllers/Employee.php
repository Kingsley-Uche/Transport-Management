<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Contact;//include contact

//use APP\Employee;
class Employee extends Controller{


	public function contact(){
	return view('contact');
	}
   
   public function about($id=0){
   	return view('include.about',['id'=>$id]);

   } //
   public function addcontact(Request $request, Contact $c){

$myvalidation =$request->validate([
	'fullname'=>'required|min:10',
	'email'=>'required',
	'confirmemail'=>'required|same:email',
  ]);
  $fullname=$request->input('fullname');
    $email=$request->input('email');
    $confirmemail=$request->input('confirmemail');
//insert into database.


$data=array('fullname'=>$fullnmae,'email'=>$email);

  $c->insert_contact($data); 
  return redirect(url,'/contact');
   	return  $fullname.'and email is:'.$email;

   }
   public function dasboard(){}
}
