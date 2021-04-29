<?php

namespace App\Http\Controllers;
use App\Models\traininguser;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request) {
        $ymd = $request->input('ymd');;
               $training = traininguser::Join('trainingmenumngs as trm', 'trainingusers.userid', 'trm.userid')->Join('trainingmenumsts as trs', 'trm.menuid' ,'trs.menuid')->where('trm.date',$ymd)->get();

    return view('menu')->with('training',$training);
    }
}
