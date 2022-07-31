@extends('admin.app')
@section('title','Tambah Curhat Rakyat')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl">
            <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Curhat rakyat</p>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="title">Title</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" name="title" type="text" required="" placeholder="Add Title" value="{{old('title')}}">
                @if($errors->has('title'))
                <div class="text-red-600">{{$errors->first('title')}}</div>
                @endif
            </div>

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
            <div>
                 <label class="block text-sm text-gray-900" for="">Isi </label>
            </div>
            <div class="col-span-5">
                <textarea id="content" name="content"
                    class="relative outline-none text-black border border-gray-400 rounded py-3 px-3 w-full bg-white shadow text-sm text-gray-700 focus:outline-none focus:shadow-outline {{ $errors->has('content') ? 'is-invalid' : '' }}"
                    id="my-textarea" value="{{old('content')}}"
                    rows="8">
                </textarea>
                    
                {{-- <textarea cols="30" rows="10" id="content" onKeyPress type="text"
                    class="relative outline-none border border-gray-400 rounded py-3 px-3 w-full bg-white shadow text-sm text-gray-700 focus:outline-none focus:shadow-outline  {{ $errors->has('content') ? ' is-invalid' : '' }}"
                name="content" value="{{old('content')}}">{{ old('content')}}</textarea> --}}

                {{-- <input id="content" type="hidden" name="content" value="{{old('content')}}"
                    class="{{ $errors->has('content') ? 'is-invalid' : '' }}">
                <trix-editor input="content"
                    class="relative outline-none border border-gray-400 rounded py-3 px-3 w-full bg-white shadow text-sm text-gray-700 focus:outline-none focus:shadow-outline {{ $errors->has('content') ? 'is-invalid' : '' }}">
                </trix-editor> --}}

                @if($errors->has('content'))
                <div class="text-red-600 italic">{{ $errors->first('content') }}</div>
                @endif
            </div>

            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Tambah</button>
                <a href="{{route('admin.curhat-rakyat.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

        </form>
    </div>                    
</div>
<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>

@endsection