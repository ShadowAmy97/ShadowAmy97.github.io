@extends('layouts.plantillapanel')

@section('title', 'Nueva Noticia')

@section('botones')
<a href="{{route('login.usuario')}}" class="px-4 py-1 text-lg text-white bg-yellow-400 rounded font-bold">Volver</a>
@endsection

@section('content')
    <div class="w-full">
        <div class="bg-gradient-to-b from-blue-800 to-blue-600 h-96"></div>
        <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">
                <p class="text-3xl font-bold leading-7 text-center">Crear un nuevo usuario</p>
                <form action="{{ route('registro.store') }}" method="POST">
                    @csrf
                    <div class="w-full flex flex-col mt-8">
                        <div class="w-full flex flex-col">
                            <label class="font-semibold leading-none" for="titulo">Nombre: </label>
                            <input type="text" name="nombre" id="nombre"
                                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" required>
                        </div>
                    </div>
                    <div class="w-full flex flex-col mt-8">
                        <div class="w-full flex flex-col">
                            <label class="font-semibold leading-none" for="titulo">Contraseña: </label>
                            <input type="password" name="password" id="password"
                                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" required>
                        </div>
                    </div>


                    <div class="md:flex items-center mt-8">
                        <div class="w-full flex flex-col">
                            <label class="font-semibold leading-none" for="rol">Rol: </label>
                            <select class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" name="rol" id="rol" required>
                                <option value="">Seleccionar</option>
                                <option value="periodista">Periodista</option>
                                <option value="administrador">Administrador</option>
                            </select>
                        </div>

                    </div>
                    <div class="flex items-center justify-center w-full">
                        <button
                            class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                            Crear
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
