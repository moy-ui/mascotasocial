<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

use App\Models\Image;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{

    //esto nos sirve para que solo los usuarios loggeados puedan acceder a la pagina
    public function __construct()
    {
        $this->middleware('auth');
    }

    //

    public function create(){
        return view('image.create');
    }

    public function save(Request $request){

        //validacion
        $validate = $this->validate($request, [
            'nombre' => 'required',
            'edad' => 'required',
            'actitudes' => 'required',
            'description' => 'required',
            'image_path' => 'required|mimes:jpg, jpeg, png, gif'
        ]);
        
        $nombre = $request->input('nombre');
        $edad = $request->input('edad');
        $actitudes = $request->input('actitudes');
        $image_path = $request->file('image_path');
        $description = $request->input('description');

        //Asignar los valores

        $user = \Auth::user();
        $image = new Image();

        $image->user_id = $user->id;
        $image->name = $nombre;
        $image->edad = $edad;
        $image->actitudes = $actitudes;
        $image->descripcion = $description;

        //subir imagen
        if($image_path){
            $image_path_name = time().$image_path->getClientOriginalName();

            Storage::disk('images')->put($image_path_name, File::get($image_path));
            $image->image_path = $image_path_name;
        }
        
        $image->save();

        return redirect()->route('home')->with(['mensaje' => 'La foto se ha subido correctamente']);
    }


    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);

        return new Response($file, 200);
    }
}
