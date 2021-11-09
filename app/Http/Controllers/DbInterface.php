<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;

class DbInterface extends Controller
{
    public function index(){
        $packages= package::all();
        // dd($packages);
        return view('homepage',compact('packages'));
    }
}
