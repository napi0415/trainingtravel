<?php

namespace App\Http\Controllers;
use App\Models\trainingmenumsts;
use Illuminate\Http\Request;

class MenuselectController extends Controller
{
    public function index(Request $request) {
        $id = $request->input('id');
    $training = trainingmenumsts::get();
    session()->put(['userid' => $id]);
    return view('menuselect')->with('training',$training);
    }
}
