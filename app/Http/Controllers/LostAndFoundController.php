<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;

use App\Losts;
use App\Comments;
class LostAndFoundController extends Controller
{
    public function lost()
    {
    	# code...
    	$data['posts'] = json_decode(\DB::table('lostsandfounds')->select('*')->get(), true);

        // dd($data);
    	$data['comments'] = json_decode(\DB::table('comments')->select('*')->get(), true);
         $data['posts']=array_reverse($data['posts']);
          // dd($data);
    	return view('lf', $data);

    }

    public function addcomment(Request $request)
    {
    	# code...
    	$req = $request->all();
    	$comm = new Comments;

    	$comm->post_id = $req['postid'];
    	$comm->comment = $req['comment_info'];
    	$comm->save();

    	return  redirect(\URL::to('/').'/lostfound');
    }

    
    public function addlost(Request $request)
    {
    	# code...
    	$data = $request->input('image');
		$photo = $request->file('image')->getClientOriginalName();
		$destination = base_path() . '/public/img/';
		$request->file('image')->move($destination, $photo);

		if ($request->hasFile('image')) {
		    // your code here
		    $req = $request->all();

	    	$post = new Losts;
	    	$post->fulname = $req['name'];
	    	$post->email = $req['email'];
	    	$post->image = 'img/'.$photo;
	    	$post->title = $req['info'];
	    	$post->state = 1;

	    	$post->save();
            echo "sadsadsd";

            return  redirect(\URL::to('/').'/lostfound');
	    	
		}
    }
    public function addfound(Request $request)
    {   

    	# code....
    	$data = $request->input('image');
		$photo = $request->file('image')->getClientOriginalName();
		$destination = base_path() . '/public/img/';
		$request->file('image')->move($destination, $photo);

		if ($request->hasFile('image')) {
		    // your code here
		    $req = $request->all();

	    	$post = new Losts;
	    	$post->fulname = $req['name'];
	    	$post->email = $req['email'];
	    	$post->image = 'img/'.$photo;
	    	$post->title = $req['info'];
	    	$post->state = 2;

	    	$post->save();

            return  redirect(\URL::to('/').'/lostfound');
	    	
		}
    }


    
    public function choose()
    {
        # code...
        return view('choose');
    }
    

}
