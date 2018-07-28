<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    //

	public function index(){


		$albums = Album::all();

		$response = [
			'albums' => $albums
		];

		return response()->json($response,200);

	}


	public function store(Request $request){

		//Validate the data
		$this->validate($request,[
			'name' => 'required|string'
		]);

		//Get the data from the frontend.
		$name = $request->input('name');
		$image = $request->file('image');



//		$name1 = $_POST['name'];
//
//		$name = $mysqli->real_escape_string($name1);
//
//
//		$sql = "select * from users where username = $name";





		//Store the data in the database.

		$album = new Album();
		$album->name = $name;
		$album->is_published = false;
//		$album->image = $path;
		$album->save();

		$response = ['status' => 'success'];

		return response()->json($response,200);


		//Send a success response.



	}

	public function update() {

	}


	public function destroy() {

	}



}
