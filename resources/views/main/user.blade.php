@extends('layouts.base')

@section('PaginaTitulo')
    
    - {{auth()->user()->username}}

@endsection

@section('contenido')
    

    <div class="flex flex-col items-center">

        <div class="flex flex-col  w-2/5  items-center p-3">
            
            <div class="flex w-full justify-between items-baseline">

                @if ($user->imagen_perfil)
                
                @else
                    <img src="{{asset('/img/usuario.svg')}}" alt="" width="200" height="200">        
                @endif

                <button>
                    Action
                </button>

            </div>
            <div class="flex flex-col w-full">

                <p>{{$user->name}} {{$user->apellido}}</p>
                <p>username: {{$user->username}}</p>
                <p>{{$user->biografia==null ? 'No hay':'Si hay'}}</p>
                <p>Se ha unido en: <strong>{{$user->created_at->format('M')}} del {{$user->created_at->format('Y')}}</strong></p>


            </div>

        </div>

        <div class="flex flex-col w-2/5 items-center p-3 mt-10">
        

            @if ($threads->count())
                {{-- <p>{{$threads->comentario}}</p> --}}

                @foreach ($threads as $thread)
                   
                    <div class=" mb-5 flex flex-col w-full">
                        <p>User: {{$user->username}}</p>
                        <p>{{$thread->titulo}}</p>
                        <p>{{$thread->comentario}}</p>
                        <p>{{$thread->created_at->format('M')}} {{$thread->created_at->format('Y')}}</p>
                    </div>

                @endforeach

            @else
                <p>No hay un coño</p>
            @endif

        </div>


    </div>

@endsection