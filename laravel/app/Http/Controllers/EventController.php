<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Event;

class EventController extends Controller
{
    //
    public function _list()
    {
    	$result = new Event;
    	if (Input::get('limit')) {
            $limit = explode('-', Input::get('limit'));
            $result = $result->skip($limit[0])->take($limit[1]); 
        } 
        if (Input::get('order')) {
    		$order = explode('-', Input::get('order'));
	    	$result = $result->orderBy($order[0], $order[1]); 
    	} else { 
	    	$result = $result->orderBy('tanggal', 'desc');
    	}
    	return response($result->get());
    }
    public function detail($id)
    {
    	$result = Event::find($id);
    	return response($result);
    }
}
