@extends('admin.app')
@section('title','Tambah Data Covid')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="POST" action= "{{route('admin.covid-19.update', $covid->id)}}">
        @method('PUT')   
        @csrf
            <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Data Covid</p>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="kode">Kode</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded  {{ $errors->has('kode') ? 'is-invalid' : '' }}" id="kode" name="kode" type="text" required="" placeholder="INY/JBR/IDN" value="{{old('kode', $covid->kode)}}">
                @if($errors->has('kode'))
                <div class="text-red-600">{{$errors->first('kode')}}</div>
                @endif
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="name">Name</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" type="text" required="" placeholder="Add Title" value="{{old('name', $covid->name)}}">
                @if($errors->has('name'))
                <div class="text-red-600">{{$errors->first('name')}}</div>
                @endif
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="positive">Positive</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="positive" name="positive" type="text" required="" placeholder="Add Title" value="{{old('positive', $covid->positive)}}">
                @if($errors->has('positive'))
                <div class="text-red-600">{{$errors->first('positive')}}</div>
                @endif
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="dirawat">Dirawat</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded {{ $errors->has('dirawat') ? 'is-invalid' : '' }}" id="dirawat" name="dirawat" type="text" required="" placeholder="Add Title" value="{{old('dirawat', $covid->dirawat)}}" >
                @if($errors->has('dirawat'))
                <div class="text-red-600">{{$errors->first('dirawat')}}</div>
                @endif
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="sembuh">Sembuh</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="sembuh" name="sembuh" type="text" required="" placeholder="Add Title" value="{{old('sembuh', $covid->sembuh)}}">
                @if($errors->has('sembuh'))
                <div class="text-red-600">{{$errors->first('sembuh')}}</div>
                @endif
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="meninggal">Meninggal</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded {{ $errors->has('meninggal') ? 'is-invalid' : '' }}" id="meninggal" name="meninggal" type="text" required="" placeholder="Add Title" value="{{old('meninggal', $covid->meninggal)}}">
                @if($errors->has('meninggal'))
                <div class="text-red-600">{{$errors->first('meninggal')}}</div>
                @endif
            </div>
            
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Tambah</button>
                <a href="{{route('admin.covid-19.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

        </form>
    </div>                    

@endsection