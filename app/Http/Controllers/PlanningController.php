<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class PlanningController extends Controller
{

    public function index(Request $request)
    {
        //get user object
        $user = User::with(['periods','activeWorkingTerms'])->where('id','=',$request->id)->first();

        // get the events and converts them to json
        $events = [];
        foreach ($user->periods as $period) {

            $newObject = new \stdClass();
            $newObject->title = $period->periodType->name;
            $newObject->start = $period->start;
            $newObject->end = $period->end;
            $newObject->color = $period->periodType->color;

            $events[] = $newObject;

        }
        $eventsJson = json_encode($events);


        return view('resources.user.planning',['user' =>$user,'eventsJson'=>$eventsJson]);
    }

}
