@extends('layouts.base')

@section('PaginaTitulo')
    
    - CreateThread

@endsection

@section('contenido')

    <div class=" flex flex-col ml-5 justify-center items-center mt-52">

        <h1 class="text-center mb-4">Creacion de Thread</h1>

        <div class=" flex justify-center items-center bg-white md:w-2/4 xl:w-1/4 p-5 rounded-xl shadow-[0px_0px_10px_rgba(0,0,0,0.6)]">

            <form action="{{route('threads.store')}}" method="POST" class="w-full flex flex-col justify-center items-center">

                @csrf

                <div class=" flex flex-col mb-4 w-full">

                    <input 
                        type="text"
                        name="titulo_thread"
                        placeholder="Escribe el Titulo..."
                        class=" p-3 border rounded-lg focus:outline-none 
                        focus:ring-2 focus:ring-blue-600 focus:border-blue-500
                        @error('titulo_thread')border-red-600 @enderror"
                    >

                    @error('titulo_thread')
                        
                        <p class=" mt-2 text-red-600">El titulo del thread es querido</p>

                    @enderror


                </div>

                <div class=" w-full">

                   
                    {{-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label> --}}
                    {{-- <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea> --}}
                    <textarea 
                        name="thread" 
                        id="thread"
                        maxlength="250"
                        class="block w-full p-3 border border-gray-300 
                        focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-500 
                        rounded-lg resize-none overflow-y
                        @error('thread')border-red-600 @enderror"
                        placeholder="Tus pensamientos..."
                    ></textarea>

                    @error('thread')
                        
                        <p class="mt-2 text-red-600">El thread es requerido para hacer un post</p>

                    @enderror

                </div>

                <button 
                    type="submit"
                    class=" mt-4 bg-blue-600 text-white font-bold w-2/4 rounded-lg p-2"
                >
                POST
                </button>

            </form>

        </div>

    </div>

@endsection

