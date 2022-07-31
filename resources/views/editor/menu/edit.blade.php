@extends('editor.app')
@section('title','Tambah Menu')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="{{route('editor.setting.menu.update', $menu->id) }}">
        @method('PUT')    
        @csrf
            <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Menu</p>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="short">Short</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="short" name="short" type="number" min="1" max="20" required placeholder="Add short" aria-label="Name" value="{{old('short', $menu->short)}}">
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="name">Name</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Add name" aria-label="Name" value="{{old('name', $menu->name)}}">
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="link">Link</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="link" name="link" type="text" required="" placeholder="Add link" aria-label="Name" value="{{old('link', $menu->link)}}">
            </div>  

         
            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="level">Level</label>
                <div class="relative w-full py-1 text-gray-700 rounded">
                    <select id="level"
                        class="block p-2 w-full bg-gray-200 appearance-none focus:outline-none {{ $errors->has('level') ? 'is-invalid' : '' }}"
                        name="level" value="{{old('menu', $menu->level)}}">
                        <option value="">Pilih Data</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <div class="flex items-center pointer-events-none absolute inset-y-0 right-0 px-2 text-gray-700">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                @if($errors->has('level'))
                <div class="text-red-600">{{$errors->first('level')}}</div>
                @endif
            </div>

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                <div>
                    <p>Default</p>
                </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="radio" name="is_active" id="is_status" value="1">
                            <label class="form-check-label inline-block text-gray-800" for="is_status">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="radio" name="is_active" id="is_status" checked value="0">
                            <label class="form-check-label inline-block text-gray-800" for="is_status">
                                No
                            </label>
                        </div>
                    </div>
            </div>

            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Tambah</button>
                <a href="{{route('editor.setting.menu.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

           
        </form>
    </div>                    
</div>

@endsection