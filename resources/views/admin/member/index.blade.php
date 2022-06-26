@extends('admin.app')
@section('title','Member')
@section('content')
<div class="w-full mt-12">
    <div class="grid grid-cols-3 gap-4 mb-4">
        <div>
            <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Member
            </p>
        </div>
        <div class="col-span-2 place-self-end">
            <a href="{{route('admin.setting.tag.create')}}" class="rounded bg-cyan-500 hover:bg-cyan-700 py-2 px-4 text-white transition duration-300 font-semibold">+ Tambah Data</a>
        </div>
    </div>

    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">UserName</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name (Inisial) </th>                    
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">HP</th>                                        
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>                  
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Level</th> 
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Default</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                </tr>
            </thead>
            
        </table>
    </div>
</div>

@endsection