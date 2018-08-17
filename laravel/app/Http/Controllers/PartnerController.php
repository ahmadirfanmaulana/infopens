<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Partner;

class PartnerController extends Controller
{
    //
    public function _list()
    {
    	$result = new Partner;
    	if (Input::get('limit')) {
            $limit = explode('-', Input::get('limit'));
            $result = $result->skip($limit[0])->take($limit[1]); 
        } 
        if (Input::get('order')) {
    		$order = explode('-', Input::get('order'));
	    	$result = $result->orderBy($order[0], $order[1]); 
    	} else { 
	    	$result = $result->orderBy('id_partner', 'desc');
    	}
    	return response($result->get());
    }
    public function detail($id)
    {
    	$result = Partner::find($id);
    	return response($result);
    }
}
