<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getEdit(){
        return view('admin.edit');
    }
    public function getCreate(){
        return view('admin.create');
    }
    public function getIndex(){
        return view('admin.index');
    }
}