<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalSelectController extends Controller {
	//
	function show() {
		return view("sample.edit");
	}

	function select() {

		$image_list = [
			(object)[
				"id" => 1,
				"image_name" => "aaa.jpg",
				"image_url" => "https://placehold.jp/3d4070/ffffff/150x150.png?text=aaa"
			],

			(object)[
				"id" => 2,
				"image_name" => "bbb.jpg",
				"image_url" => "https://placehold.jp/703d40/ffffff/150x150.png?text=bbb"
			],
			(object)[
				"id" => 3,
				"image_name" => "ccc.jpg",
				"image_url" => "https://placehold.jp/40703d/ffffff/150x150.png?text=ccc"
			]
		];


		return view("sample.select", [
			"image_list" => $image_list
		]);
	}
}
