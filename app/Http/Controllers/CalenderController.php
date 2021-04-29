<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\trainingmenumng;
use App\Models\menuexps;
use App\Models\User;
use Request as PostRequest;

class CalenderController extends Controller
{
    public function index(){
         $training = trainingmenumng::get();
         foreach($training as $trainings){
            $trainings->date = substr($trainings->date,'7');
         }
         if(substr((auth()->user()->name),0,5) == 'admin'){
              return view('adminindex')->with('training',$training);
         }
        return view('calender')->with('training',$training);
    }
    
        public function regist(){
        $training =  PostRequest::input('training');
        $date = (String)PostRequest::input('date');
        $date = str_replace('-', '', $date);
    for ($i = 0; $i< count($training); $i++)
    {
        $weight = strval(PostRequest::input('weight'.$training[$i]));
        $times = strval(PostRequest::input('times'.$training[$i]));
        $set = strval(PostRequest::input('set'.$training[$i]));
        $trainingmenumng = new trainingmenumng();
        $trainingmenumng->create([
            //useridをどこから取てくるか
            'userid' => session('userid'),
            'menuid' => $training[$i],
            'date' => $date,
            'cmpflg' => '0'
        ]);
                $menuexp = new menuexps();
        $menuexp->create([
            //useridをどこから取ってくるか
            'userid' => session('userid'),
            'menuid' => $training[$i],
            'weight' => $weight,
            'times' => $times,
            'set' => $set
        ]);

    }
        return view('calender')->with('training',$training);
    }
}
 