<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     *Muestra un listado de los usuarios.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $usuarios = User::all();
      return view('usuarios.usuariosIndex', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.usuariosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed'
      ]);
      
      $password = bcrypt($request->input('password'));

      
      
        User::create($request->all());
      
      /*
        $nombre = $request->input('name');
        $email = $request->input('email');
        $password =becrypt( $request->input('password'));
 
      $user = new user();
      $user->name=$name;
      $user->email=$email;
      $user->password=$password;
      $user->save;
      */
      return redirect()->action('UserController@Index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        User::find
        
        return view('usuarios.usuarioShow', compact($user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('usuarios.usuarioForm');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
