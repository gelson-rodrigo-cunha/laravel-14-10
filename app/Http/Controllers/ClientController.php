<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Client;
class ClientController extends Controller
{
       public function index()
    {
    	$total = Client::all()->count();
    	$clients = Client::all();
       // $clients = Client::where('user_id', Auth::user()-> id) -> get();
	
        return view('layouts.show-clients', compact('clients', 'total'));
        
    }
	

      public function create()
    {
        return view('layouts.create-client', compact('clients'));

    }
       public function store(Request $request) {
   
        $dados = $request->all();
        Client::create($dados);
        return redirect()->route('clients.index')->with('message', 'Cliente criado com sucesso!');
    }
        public function edit($id) {
        $clients = Client::findOrFail($id);
        return view('layouts.edit-client', compact('clients'));
    }
        public function update(Request $request, $id)
    {
        $dados = $request->all();
        $id = Client::findOrFail($id);
        $id->update($dados);
        return redirect()->route('clients.index')->with('message', 'Usuário editao com sucesso!');
    }
        public function destroy($id) {
        $clients = Client::findOrFail($id);
        $clients ->delete();
        return redirect()->route('clients.index')->with('message', 'Usuário excluído com sucesso!');
    }
}
