@extends('admin.app')
@section('title','Edit Iklan Baris')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Edit Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="{{route('admin.iklan-baris.update', $line_advertisement->id)}}">
        @method('PUT')
           @csrf
        <p class="text-xl text-gray-800 font-semibold pb-4">Edit Iklan Baris</p>


        <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
            <div>
                 <label class="block text-sm text-gray-900" for="content">Isi </label>
            </div>
            <div class="col-span-5">  
                    <input id="content" type="hidden" name="content" value="{{old('content', $line_advertisement->content)}}"
                    class="{{ $errors->has('content') ? 'is-invalid' : '' }}" >
                <trix-editor input="content"
                    class="relative outline-none border border-gray-400 rounded py-3 px-3 w-full bg-white shadow text-sm text-gray-700 focus:outline-none focus:shadow-outline {{ $errors->has('content') ? 'is-invalid' : '' }}" value="{{old('content', $line_advertisement->content)}}">
                </trix-editor>
             
                @if($errors->has('content'))
                <div class="text-red-600 italic">{{ $errors->first('content') }}</div>
                @endif
            </div>

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                <div>
                    <p>Default</p>
                </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="radio" name="is-invalid" id="default1">
                            <label class="form-check-label inline-block text-gray-800" for="default">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="radio" name="is-invalid" id="default2" checked>
                            <label class="form-check-label inline-block text-gray-800" for="default2">
                                No
                            </label>
                        </div>
                    </div>
                    @if($errors->has('is_active'))
                <div class="text-red-600 italic">{{ $errors->first('is_active') }}</div>
                @endif
            </div>

            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Tambah</button>
                <a href="{{route('admin.iklan-baris.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

        </form>
    </div>                    
</div>

@endsection