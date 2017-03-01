<?php namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

use App\Store;
use App\User;

class StoresController extends Controller
{    
    public function create()
    {
        return view('backend.stores.create');
    }

    public function store(Request $request)
    {
    	$store = new Store(array(
        	'domain' => $request->domain,
        ));

        $user = User::find(Auth::id());
    	$store = $user->stores()->save($store);

    	return redirect("backend/");
    }

}


