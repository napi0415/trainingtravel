<?php

namespace App\Http\Controllers;
use App\Models\traininguser;
use Illuminate\Http\Request;

class ProguramuController extends Controller
{
    public function index() {
    $training = traininguser::get();
    
    return view('proguramu')->with('training',$training);
    }
}
