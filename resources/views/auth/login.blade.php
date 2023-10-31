@extends('layouts.base')

@section('PaginaTitulo')
    
    - LoginThreads

@endsection

@section('contenido')
    
    <h1 class=" text-4xl text-center mt-40 text-orange-500">Inicia sesión de <span class=" font-bold">Dthreads</span></h1>

    <div class=" flex items-center justify-center mt-4">


        <div class=" p-6 bg-slate-200 w-1/3 rounded-md flex flex-col shadow-xl justify-center">

            @if (session('mensaje'))

                <div class=" w-full flex justify-center">
                    <p class=" mb-2 bg-red-600 rounded-lg w-1/2 p-3 text-center font-bold
                    text-white "
                        >{{session('mensaje')}}
                    </p>
                </div>
                
                
                
            @endif

            <p class="mb-2 text-center"></p>

            <form action="{{route('login')}}" method="post">
                @csrf
                <div class=" flex flex-col">
                    <label for="username" class="">
                        Username
                    </label>
    
                    <input 
                        type="text"
                        name="username"
                        id="username"
                        class=" h-10 rounded-lg w-full p-3"
                        placeholder="Ingresa tu usuario"
    
                    >
                    
                    @error('username')
                        <p class=" text-red-600 font-bold mt-1">{{$message}}</p>
                    @enderror

                </div>
    
                <div class=" flex flex-col mt-4">
                    <label for="password">
                        Password
                    </label>
    
                    <input 
                        type="password"
                        name="password"
                        id="password"
                        class=" h-10 rounded-lg p-3"
                        placeholder="Ingresa tu password"
    
                    >
                    
                    @error('password')
                        <p class=" text-red-600 font-bold mt-1">{{$message}}</p>
                    @enderror

                </div>
    
                <input 
                    type="submit" 
                    value="Iniciar Sesión"
                    class=" p-3 bg-orange-400 w-full mt-4
                    text-white font-bold rounded-md cursor-pointer"
                >

                <div class="flex gap-2 mt-4 items-center ml-2">
                    <input type="checkbox" name="remember" id="" class="h-4 w-4"><span>Mantener sesión activa.</span>
                </div>
    
            </form>
            
            <div class="relative flex py-5 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-gray-400">o</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>

            <div class=" w-full">

                <button class=" w-full bg-white text-black font-bold border-2 border-slate-400 rounded-lg">
                    <a href="{{route('register')}}" class=" block p-3">
                        Registrate  
                    </a>
                </button>

            </div>

        </div>

        

    </div>

@endsection