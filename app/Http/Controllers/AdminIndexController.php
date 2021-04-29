<?php

namespace App\Http\Controllers;
use App\Models\traininguser;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function index() {
    $training = traininguser::get();
    
    return view('adminindex')->with('training',$training);
    }
}
