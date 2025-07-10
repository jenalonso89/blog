<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

use function Laravel\Prompts\confirm;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Devuelve un listado de los usuarios
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //Nos envia al formulario de edicion de usuario
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //Carga la edicion del usuario si tu rol es administrador
        if (auth()->user()->admin){
            $user->name = $request->name;
            $user->admin = $request->admin;
            $user->save();
            return redirect()->route('users.index');
        }else{
             return redirect()->route('users.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //Borra el usuario
        $user->delete();
        return redirect()->route('users.index');

    }
}
