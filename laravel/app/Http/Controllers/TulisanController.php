<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Tulisan;

class TulisanController extends Controller
{
    //
    public function _list()
    {
    	$result = Tulisan::join('ft_kategori', 'ft_tulisan.id_kategori_tulisan', '=', 'ft_kategori.id_kategori_tulisan')
    	->join('ft_admin', 'ft_tulisan.kontributor', '=', 'ft_admin.id_admin');
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
    	$result = Tulisan::find($id);
    	return response($result);
    }
}
