<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function reg_form(){
        return view('employees.reg_form');
    }

    public function register(){
        $emp= new Employee();
        $emp->surname=$request->surname;
        $emp->othername=$request->othername;
        $emp->email=$request->emaIl;
        $emp->gender=$request->gender;

        $emp->save();

    }
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}