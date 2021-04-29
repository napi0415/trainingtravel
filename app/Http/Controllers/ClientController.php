<?php

namespace App\Http\Controllers;
use App\Models\traininguser;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
    $training = traininguser::get();
    
    return view('client')->with('training',$training);
    }
}
