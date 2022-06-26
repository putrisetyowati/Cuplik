@extends('admin.app')
@section('title','Tambah Posisi Iklan')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="{{route('admin.setting.posisi-iklan.update' , $position->id )}}">
            @method('PUT') 
            @csrf
            <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Posisi Iklan</p>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="sortir">Sortir</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="sortir" name="sortir" type="number" required="" max="20" min="1" placeholder="Insert NUmber" aria-label="Name" value="{{old('sortir', $position->sortir)}}">
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="lebar">Lebar (pixel)</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="lebar" name="lebar" type="number" max="500" min="" required="" placeholder="Insert Number" aria-label="Name" value="{{old('lebar', $position->lebar)}}">
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="tinggi">Tinggi (pixel)</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tinggi" name="tinggi" type="number" max="500" min="" required="" placeholder="Insert Number" aria-label="Name"value="{{old('tinggi', $position->tinggi)}}">
            </div> 

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                <div>
                    <p>Default</p>
                </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="radio" name="is_active" id="is_status" value="">
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
                <a href="{{route('admin.setting.posisi-iklan.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

           
        </form>
    </div>                    
</div>

@endsection