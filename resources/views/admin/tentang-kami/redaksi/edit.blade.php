@extends('admin.app')
@section('title','Redaksi')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Redaksi
    </p>
    <div class="leading-loose">

<!--  -->
<!--  -->
<!--  -->

<!-- INGET ACTIONNYA STORE -->

<!--  -->
<!--  -->
<!--  -->

        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="{{route('admin.tentangkami.redaksi.update', $redaksi->id)}}" enctype="multipart/form-data">
        @method('PUT')  
        @csrf
            <!-- <p class="text-xl text-gray-800 font-semibold pb-4">Kontak</p> -->

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="title">Title</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required placeholder="Add title" aria-label="Name" value="{{old('title', $redaksi->title)}}">
            </div>
                        
            <div class="mt-2 w-full">
                <label class="block text-sm text-gray-900" for="image">Gambar</label>
                <img src=" {{asset('storage/img/redaksi/'. $redaksi->image)}}" alt="Image" class="avatar-img rounded-circle" width="250" height="150">
                <input class="form-control block w-full px-3 py-1.5 text-base font-normal {{ $errors->has('image') ? 'is-invalid' : '' }} text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="image" name="image" value="{{old('image', $redaksi->image)}}">
                @if($errors->has('image'))
                    <div class="text-red-600">{{$errors->first('image')}}</div>
                    @endif
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="date">Date</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="date" name="date" type="date" required placeholder="" aria-label="Name" value="{{old('date', $redaksi->date)}}">
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="time">Time</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="time" name="time" type="time" required placeholder="" aria-label="Name" value="{{old('time', $redaksi->time)}}">
            </div>

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
            <div>
                 <label class="block text-sm text-gray-900" for="content">Content</label>
            </div>
            <div class="col-span-5">  
                    <input id="content" type="hidden" name="content" value="{{old('content', $redaksi->content)}}"
                    class="{{ $errors->has('content') ? 'is-invalid' : '' }}" >
                <trix-editor input="content"
                    class="relative outline-none border border-gray-400 rounded py-3 px-3 w-full bg-white shadow text-sm text-gray-700 focus:outline-none focus:shadow-outline {{ $errors->has('content') ? 'is-invalid' : '' }}" value="{{old('content', $redaksi->content)}}">
                </trix-editor>
             
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