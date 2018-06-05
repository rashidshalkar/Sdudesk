<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;

use App\News;

class NewsController extends Controller
{	
	public function lost()
    {
    	# code...
    	$data['posts'] = json_decode(\DB::table('news')->select('*')->get(), true);

         // $data['posts']=array_reverse($data['posts']);
          // dd($data);
    	return view('lf', $data);

    }
    public function news()
    {
        # code...
        return view('news');
    }
    public function more()
    {
        # code...
        return view('more');
    }
}
