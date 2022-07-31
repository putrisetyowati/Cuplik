@extends('editor.app')
@section('title','Tambah Tag Sub')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="{{route('editor.setting.tag-sub.update', $tagsub->id)}}">
        @method('PUT') 
            @csrf
            <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Tag Sub</p>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="short">Sortir</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="short" name="short" type="number" required="" placeholder="" aria-label="Name" value="{{old('short', $tagsub->short)}}">
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="id_menu">Menu</label>
                <div class="relative w-full py-1 text-gray-700 rounded">
                    <select id="id_menu"
                        class="block p-2 w-full bg-gray-200 appearance-none focus:outline-none {{ $errors->has('id_menu') ? 'is-invalid' : '' }}"
                        name="id_menu">
                        <option value="">Tampil di Menu</option>
                        @foreach($menus as $menu)
                            <option value="{{$menu->id}}">{{$menu->name}}</option>
                        @endforeach
                    </select>
                    <div class="flex items-center pointer-events-none absolute inset-y-0 right-0 px-2 text-gray-700">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                @if($errors->has('id_menu'))
                <div class="text-red-600">{{$errors->first('id_menu')}}</div>
                @endif
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="id_tag">Nama</label>
                <div class="relative w-full py-1 text-gray-700 rounded">
                    <select id="id_tag"
                        class="block p-2 w-full bg-gray-200 appearance-none focus:outline-none {{ $errors->has('id_tag') ? 'is-invalid' : '' }}"
                        name="id_tag">
                        <option value="">Tag yang ingin ditampilkan</option>
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    <div class="flex items-center pointer-events-none absolute inset-y-0 right-0 px-2 text-gray-700">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                @if($errors->has('id_tag'))
                <div class="text-red-600">{{$errors->first('id_tag')}}</div>
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
                <a href="{{route('editor.setting.tag-sub.create')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

           
        </form>
    </div>                    
</div>

@endsection