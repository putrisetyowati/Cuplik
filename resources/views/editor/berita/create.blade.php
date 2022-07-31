@extends('editor.app')
@section('title','Tambah Berita')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="POST" action= "{{route('editor.news.store')}}" enctype="multipart/form-data">
        @csrf   
        <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Berita</p>

           

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="title">Title</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" name="title" type="text" required="" placeholder="Add Title" aria-label="Name" value="{{old('title')}}">   
                @if($errors->has('title'))
                    <div class="text-red-600">{{$errors->first('title')}}</div>
                @endif
            </div>


            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="">Menu</label>
                <div class="relative w-full py-1 text-gray-700 rounded">
                    <select id=""
                        class="block p-2 w-full bg-gray-200 appearance-none focus:outline-none {{ $errors->has('') ? 'is-invalid' : '' }} " id="id_menu" name="id_menu" required=""  value="{{old('id_menu')}}"
                        name="id_menu">
                        <option value="">Pilih Menu</option>
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
                <label class="block text-sm text-gray-900" for="source">Sumber Gambar</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded {{ $errors->has('source') ? 'is-invalid' : '' }} " id="source" name="source" type="text" required="" placeholder="Add Sumber Gambar">
                @if($errors->has('source'))
                    <div class="text-red-600">{{$errors->first('source')}}</div>
                    @endif
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="desc">Keterangan Gambar</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded  {{ $errors->has('desc') ? 'is-invalid' : '' }}" id="desc" name="desc" type="text" required="" placeholder="Add Keterangan Gambar">
                @if($errors->has('desc'))
                    <div class="text-red-600">{{$errors->first('desc')}}</div>
                    @endif
            </div>

            <div class="mt-2 w-full">
                <label class="block text-sm text-gray-900" for="image">Gambar</label>
                <input class="form-control block w-full px-3 py-1.5 text-base font-normal {{ $errors->has('image') ? 'is-invalid' : '' }} text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="image" id="image">
                @if($errors->has('image'))
                    <div class="text-red-600">{{$errors->first('image')}}</div>
                @endif
            </div>
            
            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
            <div>
                 <label class="block text-sm text-gray-900" for="content">Isi </label>
            </div>
            <div class="col-span-5">  
                    <input id="content" type="hidden" name="content" value="{{old('content')}}"
                    class="{{ $errors->has('content') ? 'is-invalid' : '' }}">
                <trix-editor input="content"
                    class="relative outline-none border border-gray-400 rounded py-3 px-3 w-full bg-white shadow text-sm text-gray-700 focus:outline-none focus:shadow-outline {{ $errors->has('content') ? 'is-invalid' : '' }}">
                </trix-editor>
             
                @if($errors->has('content'))
                <div class="text-red-600 italic">{{ $errors->first('content') }}</div>
                @endif
            </div>
            

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                <div>
                    <p>Headline</p>
                </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer {{ $errors->has('headline') ? 'is-invalid' : '' }}" type="radio" name="headline" id="headline">
                            <label class="form-check-label inline-block text-gray-800" for="headline">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer {{ $errors->has('headline') ? 'is-invalid' : '' }}" type="radio" name="headline" id="headline" checked>
                            <label class="form-check-label inline-block text-gray-800" for="headline">
                                No
                            </label>
                        </div>
                    </div>
                    @if($errors->has('headline'))
                <div class="text-red-600 italic">{{ $errors->first('headline') }}</div>
                @endif
            </div>

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                <div>
                    <p>Default</p>
                </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="radio" name="is_active" id="default1">
                            <label class="form-check-label inline-block text-gray-800" for="default1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="radio" name="is_active" id="default2" checked>
                            <label class="form-check-label inline-block text-gray-800" for="default2">
                                No
                            </label>
                        </div>
                    </div>
                    @if($errors->has('is_active'))
                <div class="text-red-600 italic">{{ $errors->first('is_active') }}</div>
                @endif
            </div>
           
            
            </div>

            <div class="grid grid-cols-7 gap-7 space-x-1">
                
                    @foreach($tags as $tag)
                    <div>
                        <input type="checkbox" id="{{$tag->id}}" name="" value="{{$tag->id}}">
                        <label for="{{$tag->id}}">{{$tag->name}}</label><br>
                    </div>
                    @endforeach
                

            </div>
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Tambah</button>
                <a href="{{route('editor.news.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>
           
        </form>
    </div>                    
</div>
<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>

@endsection
