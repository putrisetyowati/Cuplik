@extends('admin.app')
@section('title','Tambah Video')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl">
            <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Video</p>

            <label class="block text-sm text-gray-900" for="cus_name">Date</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="Select date">
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">Time</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="time" required="" placeholder="Add Time" aria-label="Name">
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">Title</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Add Title" aria-label="Name">
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">URL Youtube</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Add URL" aria-label="Name">
            </div>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">Menu</label>
                <div class="relative w-full py-1 text-gray-700 rounded">
                    <select id="category"
                        class="block p-2 w-full bg-gray-200 appearance-none focus:outline-none {{ $errors->has('kabar_category_id') ? 'is-invalid' : '' }}"
                        name="kabar_category_id">
                        <option value="">Pilih Menu</option>
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
                <a href="{{route('admin.video.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

           

           
        </form>
    </div>                    
</div>

<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
@endsection