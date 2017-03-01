<?php namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

class SitesController extends Controller
{    
    public function index()
    {
    	$users = Auth::User();
        
        if($users->rule == '1')
        {
        	// $stores = 
			return view('backend.dashboard');
        }
    	else
    	{
    		return view('tester.test');
    	}
    }
}