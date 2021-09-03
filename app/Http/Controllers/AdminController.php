<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('checkrole');
    }

    public function index(){
        return view('livewire.admin.admin');
    }
}
