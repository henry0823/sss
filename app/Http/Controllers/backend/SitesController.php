<?php namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Stores;

class SitesController extends Controller
{    
    public function index()
    {
    	// $stores = 

        return view('backend.dashboard');
    }
}