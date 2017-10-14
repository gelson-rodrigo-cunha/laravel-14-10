<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Localizations;
class UsersController extends Controller
{
       public function index()
    {
    	//$total = User::all()->count();
    
        $users = User::all();
	
        return view('layouts.show-users', compact('users'));
        
    }
	

      public function create()
    {
        return view('layouts.create-user', compact('users'));

    }
   
       public function store(Request $request) {
   
        $dados = $request->all();
        User::create([
            'name' => $dados['name'],
            'email' => $dados['email'],
            'password' => bcrypt($dados['password']),
        ]);
        return redirect()->route('user.index')->with('message', 'Usuário criado com sucesso!');
    }
        public function edit($id) {
        $users = User::findOrFail($id);
        return view('layouts.edit-user', compact('users'));
    }
        public function show($id) {
        $users = User::findOrFail($id);
        $locations = Localizations::all();
        //return view('layouts.gmaps',compact('locations'));
        return view('layouts.location-user', compact('users','locations'));
    }
        public function update(Request $request, $id)
    {
        $dados = $request->all();
        $id = User::findOrFail($id);
        $id->update([
            'name' => $dados['name'],
            'email' => $dados['email'],
            'password' => bcrypt($dados['password']),
        ]);
        return back()->with(["message_edit" => 'Usuários editado com sucesso']);
    }
        public function destroy($id) {
        $users = User::findOrFail($id);
        $users ->delete();
        return redirect()->route('user.index')->with('message', 'Usuário excluído com sucesso!');
    }
}
