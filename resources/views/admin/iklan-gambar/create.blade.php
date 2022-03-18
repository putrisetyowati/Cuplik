@extends('admin.app')
@section('title','Tambah Iklan Gambar')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl">
            <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Iklan Gambar</p>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">Title</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Add Title" aria-label="Name">
            </div>  

            <div class="mt-2 w-full">
                <label class="block text-sm text-gray-900" for="cus_name">Gambar</label>
                <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile">
            </div>
          
            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">Posisi</label>
                <div class="relative w-full py-1 text-gray-700 rounded">
                    <select id="category"
                        class="block p-2 w-full bg-gray-200 appearance-none focus:outline-none {{ $errors->has('kabar_category_id') ? 'is-invalid' : '' }}"
                        name="kabar_category_id">
                        <option value="">Pilih Data</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                    <div class="flex items-center pointer-events-none absolute inset-y-0 right-0 px-2 text-gray-700">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                @if($errors->has('kabar_category_id'))
                <div class="text-red-600">{{$errors->first('kabar_category_id')}}</div>
                @endif
            </div>

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                <div>
                    <p>Default</p>
                </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
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