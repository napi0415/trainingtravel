<?php

namespace App\Http\Controllers;
use App\Models\traininguser;
use Illuminate\Http\Request;

class ExplainController extends Controller
{
    public function index(Request $request){
        $id = $request->input('id');
        $training = traininguser::Join('trainingmenumngs as trm', 'trainingusers.userid', 'trm.userid')->Join('trainingmenumsts as trs', 'trm.menuid' ,'trs.menuid')->Join('menuexps as exp','exp.userid','trainingusers.userid')->where('trs.menuid',$id)->where('trm.menuid',$id)->where('exp.menuid',$id)->get();

        return view('explain')->with('training',$training); 
    }
}
