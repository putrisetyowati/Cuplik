@extends('editor.app')
@section('title','Editor')
@section('content')
<div class="w-full mt-12">
    <div class="grid grid-cols-3 gap-4 mb-4">
        <div>
            <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Editor
            </p>
        </div>
        <div class="col-span-2 place-self-end">
            <a href="{{route('editor.setting.register.create')}}" class="rounded bg-cyan-500 hover:bg-cyan-700 py-2 px-4 text-white transition duration-300 font-semibold">+ Tambah Data</a>
        </div>
    </div>

    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name (Inisial) </th>                    
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">HP</th>                                        
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>                  

                </tr>
            </thead>

<tbody class="text-gray-700">
    @php
        $i = 1;

    @endphp

    @foreach ($register as $data)
                <tr>
                    <td class="text-left py-3 px-4">{{$i++}}</td>
                    <td class="text-left py-3 px-4">{{$data->username}}</td> 
                    <td class="text-left py-3 px-4">{{$data->initial}}</td>
                    <td class="text-left py-3 px-4">{{$data->phone}}</td>
                    <td class="text-left py-3 px-4">{{$data->email}}</td>
                   
                                             
                </tr>
                    
                @endforeach
</tbody>
            
        </table>
    </div>
</div>

@endsection