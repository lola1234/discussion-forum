<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Watcher;
use Illuminate\Http\Request;

class WatcherController extends Controller
{
    public function watch($id){
		Watcher::create([
			'user_id' => Auth::id(),
			'discussion_id' => $id
		
		]);
		
		Session::flash('success','You are watching this discussion');
		return redirect()->back();
	}
	
	public function unwatch($id){
		
		$watcher= Watcher::where('discussion_id', $id)->where('user_id', Auth::id());
		
		$watcher->delete();
		
		Session::flash('success','You are no longer watching this discussion');
		return redirect()->back();
	}
}
