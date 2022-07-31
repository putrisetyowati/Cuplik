@extends('admin.app')
@section('title','Kontak')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Kontak
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="POST"action="{{route('admin.tentangkami.kontak.update' , $kontak->id)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <!-- <p class="text-xl text-gray-800 font-semibold pb-4">Kontak</p> -->

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="title">Title</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required placeholder="Add title" aria-label="Name"  value="{{old('title', $kontak->title)}}">
            </div>
                        
            <div class="mt-2 w-full">
                <label class="block text-sm text-gray-900" for="image">Gambar</label>
                <input class="form-control block w-full px-3 py-1.5 text-base font-normal {{ $errors->has('image') ? 'is-invalid' : '' }} text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  id="image" name="image" type="file" id="formFile" value="{{old('image', $kontak->image)}}">
                @if($errors->has('image'))
                <div class="text-red-600">{{$errors->first('image')}}</div>
                @endif
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="date">Date</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="date" name="date" type="date" required placeholder="" aria-label="Name" value="{{old('date', $kontak->date)}}">
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="time">Time</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="time" name="time" type="time" required placeholder="" aria-label="Name" value="{{old('time', $kontak->time)}}">
            </div>

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
            <div>
                 <label class="block text-sm text-gray-900" for="content">Isi Konten</label>
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
                <a href="" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

           
        </form>
    </div>                    
</div>

@endsection







































<!-- @extends('admin.app')
@section('title','Kontak')
@section('content')
<div class="w-full mt-12">

    <div class="grid grid-cols-3 gap-4 mb-4">
            <div>
                <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Kontak
                </p>
            </div>
            <div class="col-span-2 place-self-end">
                <a href="{{route('admin.tentangkami.kontak.create')}}" class="rounded bg-cyan-500 hover:bg-cyan-700 py-2 px-4 text-white transition duration-300 font-semibold">+ Tambah Data</a>
            </div>
    </div>
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Gambar</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Time</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Content</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($kontak as $data)
                                <tr>
                                    <td class="text-left py-3 px-4">{{ $data->title }}</td>
                                    <td class="text-left py-3 px-4">
                                        @if ($data->image)
                                        <img class="w-56 h-20 object-cover object-center" src="{{ asset('storage/img/kontak/' . $data->image) }}"
                                            alt="banner">
                                        @else
                                        <img class="w-56 h-20 object-cover object-center" src="{{ asset('img/no-image.png') }}"
                                            alt="no-image">
                                        @endif
                                    </td>
                                    <td class="text-left py-3 px-4">{{ $data->date }}</td>
                                    <td class="text-left py-3 px-4">{{ $data->time }}</td>
                                    <td class="text-left py-3 px-4">{{ $data->content }}</td>

                                    <td class="flex space-x-2 text-left py-3 px-4">
                                        <a href="{{ url('admin/iklan-gambar')}}/{{ $data->id }}/{{ 'edit' }}">
                                            <div
                                            class="bg-green-500 inline-block py-1 px-2 hover:bg-green-700 text-white font-normal rounded transition duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </a>
                                        <form action="{{url('admin/iklan-gambar')}}/{{$data->id}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-normal py-1 px-2 rounded transition duration-300"
                                                onclick="return confirm('anda yakin ingin menghapus data?');">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    @endforeach
                                    </tr>
                                    
                            </tbody>
            </table>
    </div>
 </div>
 @endsection -->