@extends('layouts.base')

@section('PaginaTitulo')
    
    - RegistroThreads

@endsection

@section('contenido')
    
    <h1 class=" text-4xl text-center mt-32 text-orange-500">Registro para <span class=" font-bold">Dthreads</span></h1>


    <div class=" flex justify-center items-center mt-4">
        <div class=" p-6 bg-slate-200 w-1/3 rounded-md flex flex-col shadow-xl mb-20">

            <form action="{{route('register')}}" method="post" novalidate>
                @csrf
                <div class=" flex flex-col ">
                    <label for="name" class=" font-bold text-orange-400 mb-1">
                        Nombre
                    </label>
    
                    <input 
                        type="text"
                        name="name"
                        id="name"
                        class=" h-10 rounded-lg w-full p-3"
                        placeholder="Ingresa tu nombre"
                        value="{{old('name')}}"
                    >
                    
                    @error('name')

                        <p class=" text-red-600 font-bold mt-1">{{$message}}</p>
                        
                    @enderror

                </div>

                <div class=" flex flex-col mt-4">
                    <label for="apellido" class="font-bold text-orange-400 mb-1">
                        Apellido
                    </label>
    
                    <input 
                        type="text"
                        name="apellido"
                        id="apellido"
                        class=" h-10 rounded-lg w-full p-3"
                        placeholder="Ingresa tu apellido"
                        value="{{old('apellido')}}"
    
                    >
                    
                    @error('apellido')
                        <p class=" text-red-600 font-bold mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class=" flex flex-col mt-4">
                    <label for="username" class="font-bold text-orange-400 mb-1">
                        Username
                    </label>
    
                    <input 
                        type="text"
                        name="username"
                        id="username"
                        class=" h-10 rounded-lg w-full p-3"
                        placeholder="Ingresa tu username"
                        value="{{old('username')}}"
    
                    >
                    
                    @error('username')
                        <p class=" text-red-600 font-bold mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class=" flex flex-col mt-4">
                    <label for="email" class="font-bold text-orange-400 mb-1">
                        Email
                    </label>
    
                    <input 
                        type="text"
                        name="email"
                        id="email"
                        class=" h-10 rounded-lg w-full p-3"
                        placeholder="Ingresa tu email"
                        value="{{old('email')}}"
    
                    >
                    
                    @error('email')
                        <p class=" text-red-600 font-bold mt-1">{{$message}}</p>
                    @enderror

                </div>
    
                <div class=" flex flex-col mt-4">
                    <label for="password" class="font-bold text-orange-400 mb-1">
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
                
                <div class=" flex flex-col mt-4">
                    <label for="password" class="font-bold text-orange-400 mb-1">
                        Validar password
                    </label>
    
                    <input 
                        type="password"
                        name="password_confirmation"
                        id="password"
                        class=" h-10 rounded-lg p-3"
                        placeholder="Repite la contraseña"
    
                    >
                    
                    @error('password')
                        <p class=" text-red-600 font-bold mt-1">{{$message}}</p>
                    @enderror

                </div>

                <input 
                    type="submit" 
                    value="Registrarme"
                    class=" p-3 bg-orange-400 w-full mt-4
                    text-white font-bold rounded-md cursor-pointer"
                >
    
            </form>
        
        </div>
    </div>

    

@endsection