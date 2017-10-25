<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;

class ComputersController extends Controller
{
    	public function index(){
		$computers = Computer::All();
		return view('index', compact('computers'));
	}
}
