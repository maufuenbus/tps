<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function create(){
        return view ('admin.ges-usuarios');
    }

    public function store(Request $request){
        $user = User::where('username', $request->username)->first();
        if ($user != null) {
            return back()->withErrors([
                'message' => 'Username existe, intente con otro',
            ]);
        }else{
            $user = User::create(request(['name','apellidop','rut','role','password','username']));
        }
        return redirect()->to('ges-usuarios');     
    }

    public function index(){
        $users = User::orderBy('id')->paginate(5);
        return view('admin.ges-usuarios', ['users' => $users]);
    }

    public function show($id){
        $users = User::find($id);
        return view('admin.ges-usuarios', ['users' => $users]);
    }




public function update(Request $request, $id){
    $users = User::find($id);
    $users ->name = $request -> name;
    $users ->apellidop = $request -> apellidop;
    $users ->rut = $request -> rut;
    $users ->username = $request -> username;
    $users ->password = $request -> password;
    $users ->role = $request -> role;
    $users->save(); 
    return redirect()->to('ges-usuarios')->with('success','Usuario Actializado');
}

public function destroy($id){
    $users = User::find($id);
    $users->delete();
    return redirect()->to('ges-usuarios')->with('success','Usuario Eliminado');
}
}