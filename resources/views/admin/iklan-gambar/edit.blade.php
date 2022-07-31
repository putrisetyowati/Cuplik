@extends('admin.app')
@section('title','Edit Iklan Gambar')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Edit Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="{{route('admin.iklan-gambar.update', $image_advertisement->id)}}" enctype="multipart/form-data">   
      @method('PUT')
        @csrf
            <p class="text-xl text-gray-800 font-semibold pb-4">Edit Iklan Gambar</p>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="title">Title</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded  {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" name="title" type="text" required="" placeholder="Add Title" value="{{old('title', $image_advertisement->title)}}">
                @if($errors->has('title'))
                <div class="text-red-600">{{$errors->first('title')}}</div>
                @endif
            </div>  

            <div class="mt-2 w-full">
                <label class="block text-sm text-gray-900" for="image">Gambar</label>
                <img src=" {{asset('storage/img/iklan-gambar/'. $image_advertisement->image)}}" alt="Image" class="avatar-img rounded-circle">
                <input class="form-control block w-full px-3 py-1.5 text-base font-normal {{ $errors->has('image') ? 'is-invalid' : '' }} text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  id="image" name="image" type="file" id="formFile" value="{{old('image', $image_advertisement->image)}}">
                @if($errors->has('image'))
                <div class="text-red-600">{{$errors->first('image')}}</div>
                @endif
            </div>
          
            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="id_posisi">Posisi</label>
                <div class="relative w-full py-1 text-gray-700 rounded">
                    <select id="posisi"
                        class="block p-2 w-full bg-gray-200 appearance-none focus:outline-none {{ $errors->has('id_posisi') ? 'is-invalid' : '' }}" id="id_posisi" name="id_posisi" value="{{old('id_posisi', $image_advertisement->id_posisi)}}"
                        name="id_posisi">
                        <option value="">Pilih Data</option>
                        @foreach ($posisi as $data)
                            <option value="{{$data->id}}">{{ $data->title }}</option>
                        @endforeach
                    </select>
                    <div class="flex items-center pointer-events-none absolute inset-y-0 right-0 px-2 text-gray-700">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                @if($errors->has('posisi'))
                <div class="text-red-600">{{$errors->first('posisi')}}</div>
                @endif
            </div>

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                <div>
                    <p>Default</p>
                </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="radio" name="is_active" id="is_active1" value="{{old('is_active')}}">
                            <label class="form-check-label inline-block text-gray-800" for="is_active1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer  {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="radio" name="is_active" id="is_active2" value="{{old('is_active')}}"checked>
                            <label class="form-check-label inline-block text-gray-800" for="is_active2">
                                No
                            </label>
                        </div>
                    </div>                    
            </div>

            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Tambah</button>
                <a href="{{route('admin.iklan-gambar.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

           
        </form>
    </div>                    
</div>

@endsection