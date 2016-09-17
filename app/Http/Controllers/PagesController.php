<?php

namespace blog\Http\Controllers;


class PagesController extends Controller {
	
	public function getIndex() {
		return view('pages.welcome');
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
