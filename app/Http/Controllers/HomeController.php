<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Redirect,Response;
use App\Models\Blogs;
use App\Models\MsmeForm;
use App\Models\SubscribeDetails;
use App\Models\ContactDetails;
use App\Models\Image;
use App\Models\Gallery;
use App\Models\Categoryform;
use View;
class HomeController extends Controller
{
	public function home_page()
	{
		return View::make('pages/home');
	}
	public function about_us()
	{
		return View::make('pages/about');
	}
	public function management_team()
	{
		return View::make('pages/trustee');
	}
	public function mou()
	{
		return View::make('pages/mou');
	}
	public function contact()
	{
		return View::make('pages/contact');
	}
	public function committee()
	{
		return View::make('pages/committee');
	}
		public function events()
	{
		return View::make('pages/events');
	}
	public function gallery()
	{
		return View::make('pages/gallery');
	}
	public function view()
	{
		return View::make('pages/view');
	}	
	
}