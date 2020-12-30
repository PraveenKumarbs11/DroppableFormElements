<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class valueController extends Controller
{
    public function dragDrop(){
    	return view('dragDrop');
    }
    public function leaveForm(Request $req){
    	dd($req->value, $req->name);
    }
    public function appForm(Request $req){
    	dd($req);
    }
    public function empForm(Request $req){
    	dd($req);
    }
    public function perForm(Request $req){
    	dd($req);
    }
    public function dropForm(){
        return view('createDropForm');
    }
    public function formData(Request $req){
        dd($req->name, $req->email, $req->phone, $req->password, $req->marital, $req->terms);
    }
    public function createForm(){
        return view('dropFormSave');
    }
    public function finalForm(Request $req){
        dd($req->name, $req->email, $req->password, $req->username, $req->marital, $req->terms, $req->address, $req->date, $req->link, $req->position, $req->resume, $req->phone);
    }
}
