<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    //

	public function index(){

		//Get all the albums from the database and pass it as a JSON response.

//		$albums = DB::select("select * from albums");

		$albums = [
			[
				'id' => 1,
				'name' => 'Test 1',
				'image' => 'https://imgsv.imaging.nikon.com/lineup/lens/zoom/normalzoom/af-s_dx_18-140mmf_35-56g_ed_vr/img/sample/sample1_l.jpg'

			],
			[

				'id' => 2,
				'name' => 'Test 2',
				'image' => 'https://imgsv.imaging.nikon.com/lineup/lens/zoom/normalzoom/af-s_dx_18-140mmf_35-56g_ed_vr/img/sample/sample1_l.jpg'
			]
		];

		$response = [
			'albums' => $albums
		];

		return response()->json($response,200);

	}


	public function store(){

		//Get the data from the frontend.

		//Validate the data


		//Store the data in the database.


		//Send a success response.
	}

}
