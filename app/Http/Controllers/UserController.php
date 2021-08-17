<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Contracts\Cache\Store;
// use Illuminate\Http\File;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function config(){
        return view('user.config');
    }

    public function update(Request $request){


        //Conseguir usuario identificado
        $user = \Auth::user();

        $id = $user->id;

        //Validar los datos que nos llegan por post
        $validate  = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255', 'unique:users,nick,' . $id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id]
        ]);

        //Asignar los datos a sus variables correspondientes 
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');

        //Settear los nuevos valores al objeto del usuario
        $user->name = $name;
        $user->surname = $surname;
        $user->nick = $nick;
        $user->email = $email;

        //subir imagenes
        $image_path = $request->file('image_path');
        if($image_path){

            //Poner Un Nombre unico
            $image_path_name = time(). $image_path->getClientOriginalName();
            
            //Guardar en Storage/app/users
            Storage::disk('users')->put($image_path_name, File::get($image_path));

            //setteamos la imgen
            $user->image = $image_path_name;
        }

        //ejecutar la consulta
        $user->update();

        return redirect()->route('config')->with(['mensaje'=>'usuario actualizado correctamente']);

    }


    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);

        return new Response($file, 200);
    }
}
