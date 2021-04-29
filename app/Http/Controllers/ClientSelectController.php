<?php

namespace App\Http\Controllers;
use App\Models\traininguser;
use Illuminate\Http\Request;

class ClientSelectController extends Controller
{
    public function index() {
    $training = traininguser::get();
    
    return view('clientselect')->with('training',$training);
    }
}
