<?php

namespace App\Http\Controllers;

use App\Score;
use App\Task;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ScoreRequest;
use Illuminate\Support\Facades\Input;

class ScoresController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
    	if(Auth::user()->role == 'ViceHead' ){
    		$scores = Score::where('own_user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->take(20)->get();
    	} else if (Auth::user()->role != 'Member') {
    		$scores = Score::orderBy('id','desc')->take(40)->get();
    	}
    	return view('scores.index', compact('socres'));
    }

    public function getByuser($user_id){
    	if(Auth::user()->role == 'ViceHead' ){
    		$scores = User::findorfail($user_id)->scores()->where('own_user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->take(20)->get();
    	} else if (Auth::user()->role != 'Member') {
    		$scores = User::findorfail($user_id)->scores()->orderBy('id', 'desc')->take(40)->get();
    	}
    	return view('scores.index', compact('socres'));
    }

    public function show($id){
    	$score = Score::findorfail($id);
    	return view('scores.show', compact('score'));
    }

    public function create($id){
    	$task_id = $id;
    	$users = Task::findorfail($task_id)->users()->lists('username','id');
    	return view('scores.create', compact('users','task_id'));
    }

    public function store(ScoreRequest $request, $id){
    	$score = new Score;
    	$score->creativity    = $request->input('creativity');
    	$score->time          = $request->input('time');
    	$score->quality       = $request->input('quality');
    	$score->numberofedits = $request->input('numberofedits');
    	$score->bouns         = $request->input('bouns');
    	$score->user_id       = $request->input('user_id');
    	$score->task_id       = $id;
    	$score->own_user_id   = Auth::user()->id;
    	$score->save();
    	return redirect('tasks');
    }
    
}
