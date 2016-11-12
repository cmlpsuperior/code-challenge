<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Ip;

class LinkController extends Controller
{
    public function index() {
		$links = Link::all();
		return view('index', ['links'=>$links]);
	}

	public function create() {

		return view('create');
	}

	public function store(Request $request) {

		$link= new Link();
    	$link->url_large=$request->get('link_large');
    	$link->url_short=' ';
    	$link->save();
    	//dd($link->id_link);
    	$link->url_short= url('/') . '/'.'shortLink/'.$link->id_link;
    	$link->save();
   
		return redirect()->action('LinkController@show', ['id' => $link->id_link] );    
	}

	public function show ($id){
		$link= Link::findOrFail($id);

		return view('show', ['link'=>$link]);
	}

	public function shortLink (Request $request, $id){
		$ip_addres= $request->ip(); //obtengo el ip del cliente

		$ip = new Ip(); //registro el cliente en la BD
		$ip->ip_addres = $ip_addres;
		$ip->id_link = $id;

		$ip->save();

		$link = Link::findOrFail($id); //obtengo el short link

		return redirect($link->url_large);
	}

}
