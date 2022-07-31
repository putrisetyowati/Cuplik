@extends('editor.app')
@section('title','Tambah Member')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl">
            <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Member</p>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">Username</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Username" aria-label="Name">
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">Password</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="password" required="" aria-label="Name">
            </div> 

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">Nama (Inisial)</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Inisial" aria-label="Name">
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">HP</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Insert number" aria-label="Name">
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="cus_name">Email</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Add email" aria-label="Name">
            </div> 

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                <div>
                    <p>Level</p>
                </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault1">
                                User
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
                                Administrator
                            </label>
                        </div>
                    </div>
            </div>

            <div class="grid flex justify-between grid-cols-1 gap-4 my-3">
                <div>
                    <p>Default</p>
                </div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault3">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault4">
                                No
                            </label>
                        </div>
                    </div>
            </div>

            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Tambah</button>
                <a href="{{route('editor.setting.tag.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

           
        </form>
    </div>                    
</div>

@endsection