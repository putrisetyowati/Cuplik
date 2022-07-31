@extends('admin.app')
@section('title','Tambah Editor')
@section('content')

<div class="w-full mt-6 pl-0 lg:pl-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Tambah Data
    </p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" action="{{route('admin.setting.register.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="text-xl text-gray-800 font-semibold pb-4">Tambah Editor</p>

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="name">Nama Lengkap</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text" required="" placeholder="Nama" aria-label="Name">

                <!-- TAROH ERRORNYA DI BAWAH INPUT -->
                @if($errors->has('username'))
                    <div class="text-red-600 italic">{{ $errors->first('username') }}</div>
                @endif
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="password">Password</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" aria-label="Name">
           
                @if($errors->has('password'))
                    <div class="text-red-600 italic">{{ $errors->first('password') }}</div>
                @endif
            </div> 

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="initial">Nama (Inisial)</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="initial" name="initial" type="text" required="" placeholder="Inisial" aria-label="Name">
            
                @if($errors->has('initial'))
                    <div class="text-red-600 italic">{{ $errors->first('initial') }}</div>
                @endif
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="tmpt_lhr">Tempat Lahir</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tmpt_lhr" name="tmpt_lhr" type="text" required="" placeholder="Tempat Lahir" aria-label="Name">
            
                @if($errors->has('tmpt_lhr'))
                    <div class="text-red-600 italic">{{ $errors->first('tmpt_lhr') }}</div>
                @endif
            </div> 

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="tgl_lhr">Tanggal Lahir</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tgl_lhr" name="tgl_lhr" type="date" required="" placeholder="Tanggal Lahir" aria-label="Name">
            
                @if($errors->has('tgl_lhr'))
                    <div class="text-red-600 italic">{{ $errors->first('tgl_lhr') }}</div>
                @endif
            </div> 

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="almt_domisili">Domisili</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="almt_domisili" name="almt_domisili" type="text" required="" placeholder="Domisili" aria-label="Name">
            
                @if($errors->has('almt_domisili'))
                    <div class="text-red-600 italic">{{ $errors->first('almt_domisili') }}</div>
                @endif
            </div> 

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="pendidikan">Pendidikan</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="pendidikan" name="pendidikan" type="text" required="" placeholder="Pendidikan" aria-label="Name">
            
                @if($errors->has('pendidikan'))
                    <div class="text-red-600 italic">{{ $errors->first('pendidikan') }}</div>
                @endif
            </div> 

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="phone">HP</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="phone" name="phone" type="number" required="" placeholder="Insert number" aria-label="Name">
            
                @if($errors->has('phone'))
                    <div class="text-red-600 italic">{{ $errors->first('phone') }}</div>
                @endif
            </div>  

            <div class="mt-2">
                <label class="block text-sm text-gray-900" for="email">Email</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="email" required="" placeholder="Add email" aria-label="Name">
            
                @if($errors->has('email'))
                    <div class="text-red-600 italic">{{ $errors->first('email') }}</div>
                @endif
            </div> 

            <div class="mt-2 w-full">
                <label class="block text-sm text-gray-900" for="image">Upload Foto</label>
                <input class="form-control block w-full px-3 py-1.5 text-base font-normal {{ $errors->has('image') ? 'is-invalid' : '' }} text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  id="image" name="image" type="file" id="formFile">
                @if($errors->has('image'))
                <div class="text-red-600">{{$errors->first('image')}}</div>
                @endif
            </div>

            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Tambah</button>
                <a href="{{route('admin.setting.register.index')}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded">Batal</a>
            </div>

           
        </form>
    </div>                    
</div>

@endsection