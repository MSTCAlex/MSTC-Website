<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class NewsController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    
	public function create(){
		return view('news.create');
	}

	public function store(CreateNewsRequest $request)
	{
		News::create($request->all());
		return redirect('news');
	}

	public function edit($id)
	{
		$news = News::findOrFail($id);
		return view('news.edit', compact('news'));
	}

	public function update(CreateNewsRequest $request, $id)
	{
		News::findOrFail($id)->update($request->all());
		return redirect('news');
	}

	public function index(){

		$news = News::latest('published_at')->published()->get();
		return view('news.index', compact('news'));
		
	}

	public function show($id){

		$new = News::findOrFail($id);
		return view('news.show', compact('new'));

	}

	public function destroy($id)
    {
        News::findOrfail($id)->delete();
        return redirect('news');
    }

}