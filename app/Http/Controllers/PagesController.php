<?php

namespace blog\Http\Controllers;

use Illuminate\Support\Facades\DB;
use blog\Post;

class PagesController extends Controller {
	
	public function getIndex() {
		$posts = Post::select('*')
						->orderBy('id', 'desc')
						->limit(4)
						->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		$first = 'Agastya';
		$last = 'Darma';

		$fullname = $first . " " . $last;
		$email = "ag@agastyadarma.com";

		$data =[];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		


		return view('pages.about')->withData($data);

	}

	public function getContact() {
		return view('pages.contact');

	}

	public function postContact() {

	}
}
