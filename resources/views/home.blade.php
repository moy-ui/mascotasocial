@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @include('includes.mensaje')


            @foreach ($images as $image)
                
                <div class="card">
                    <div class="card-header">

                        @if ($image->user->image)
                            
                        <picture class="img-logo-perfil">
                            <img src="{{ route('user.avatar', ['filename'=>$image->user->image]) }}" alt="" class="avatar">
                        </picture>

                        @endif

                        {{ $image->user->name . ' ' . $image->user->surname }}
                        <span class="texto-opacity">{{' | @' . $image->user->nick }} </span>
                    </div>

                    
                    @if ($image->image_path)
                    <div class="card-body">

                        <div class="card-info">
                            <picture class="img-publicacion text-center col-md-6">
                                <img class="img-fluid  rounded mx-auto d-block" src="{{ route('image.file', ['filename'=>$image->image_path]) }}" alt="">
                            </picture>

                            <div class="text-info item-right col-md-4 text-center">
                                <p class="text-dark">Actitudes de {{'@'. $image->name}}</p>
                                {{$image->actitudes}}
                                <br>
                                <p class="text-dark">Edad:</p>
                                {{$image->edad}}
                            </div>
                        </div>

                        <div class="description mt-2">
                            <span class="texto-opacity">{{'@' . $image->user->nick . ' | ' }} </span> {{$image->descripcion}}
                        </div>

                        <div class="likes mt-2">
                            Likes: <span class="text-info mr-5"> {{count($image->likes)}} </span>
                            <a href="" class="btn btn-warning btn-coments ml-2 ">
                                Comentarios ({{ count($image->comments)}})
                            </a>
                        </div>
                        
                    </div>
                    @endif

                </div>
                <br>

            @endforeach
        </div>

        {{-- Paginacion --}}
        <div class="clearfix"></div>
        <div class="text-center">
            {{ $images->links() }}
        </div>
        
    </div>
</div>
@endsection
