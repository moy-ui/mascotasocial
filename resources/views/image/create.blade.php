@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-header">
                    Subir nueva imagen
                </div>

                <div class="card-body">
                    <form action="{{route('image.save')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="image_path" class="col-md-3 col-form-label text-md-right">
                                Imagen
                            </label>

                            <div class="col-md-7">
                                <input type="file" id="image_path" name="image_path" class="form-control @error('description') is-invalid @enderror"  required>
                                @error('image_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br>    
                        <div class="form-group row">
                            <label for="nombre" class="col-md-3 col-form-label text-md-right">
                                Nombre
                            </label>

                            <div class="col-md-7">
                                <input type="text"  id="nombre" name="nombre" class="form-control" class="form-control @error('nombre') is-invalid @enderror"  required>
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                        <br>    
                        <div class="form-group row">
                            <label for="edad" class="col-md-3 col-form-label text-md-right">
                                Edad
                            </label>

                            <div class="col-md-7">
                                <input type="number"  id="edad" name="edad" class="form-control" class="form-control @error('edad') is-invalid @enderror"  required>
                                @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                        <br>    
                        <div class="form-group row">
                            <label for="actitudes" class="col-md-3 col-form-label text-md-right">
                                Actitudes
                            </label>

                            <div class="col-md-7">
                                <input type="text"  id="actitudes" name="actitudes" class="form-control" class="form-control @error('actitudes') is-invalid @enderror"  required>
                                @error('actitudes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                        <br>    
                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">
                                Descripción
                            </label>

                            <div class="col-md-7">
                                <textarea  id="description" name="description" class="form-control" class="form-control @error('description') is-invalid @enderror"  required></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  

                        <br>    
                        <div class="form-group row">
                           
                            <div class="col-md-6 offset-md-7">
                                <input type="submit" class="btn btn-primary" value="Subir imagen">
                            </div>
                        </div>  

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection