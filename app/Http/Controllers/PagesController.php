<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
    	//$name = 'Ali <span style="color:red;">Tha\'Ban</span>';
        return view('pages.about')->with([
        	'first'=>'Ali',
        	'last'=>'Tha\'Ban'
        ]);
    }
	
	public function contact()
	{
		return view('pages.contact');
	}
}
