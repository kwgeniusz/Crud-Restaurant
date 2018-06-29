<?php

namespace restaurant\Http\Controllers;

use Illuminate\Http\Request;
use restaurant\Client;

class ClientController extends Controller
{
    public function index () {
		
		  $clients = Client::orderBy('ci','DESC')->paginate();
		  return View('client.index',compact('clients'));
		  
	}
	
    public function create() {
		  return View('client.create');  
	}
	
    public function store(Request $request) {
		
		//validation
		$this->validate($request, [
		   'ci'=>'required|int',
		   'name'=>'required|string',
		   'address'=>'required|string',
		   'phone'=>'required|int',
		
		]);
		
	$client = new Client;
		  
		  $client->ci = $request->ci;
		  $client->name = $request->name;
		  $client->address = $request->address;
		  $client->phone = $request->phone;
		  $client->save();
		  
		  return redirect()->route('client.index')
		                   ->with('info','El Cliente se Creo');

	}
	
	 public function edit($id) {
		
		  $client = Client::find($id);
		  return View('client.edit',compact('client'));
		  
	}
	 public function update(Request $request,$id) {
		
			//validation
		$this->validate($request, [
		   'ci'=>'required|int',
		   'name'=>'required|string',
		   'address'=>'required|string',
		   'phone'=>'required|int',
		]);
		  $client = Client::find($id);
		  
		  $client->ci = $request->ci;
		  $client->name = $request->name;
		  $client->address = $request->address;
		  $client->phone = $request->phone;
		  $client->save();
		  
		  return redirect()->route('client.index')
		                   ->with('info','El Cliente se actualizo');

	}
	
	 public function destroy($id) {
	
		  $client = Client::find($id);
		  $client->delete();
		  return back()->with('info','El Cliente Fue Eliminado');
		  
	}
}
