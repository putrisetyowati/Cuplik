@extends('editor.app')
@section('title','Keuntungan')
@section('content')

<div class="w-full mt-12">
    <div class="grid grid-cols-3 gap-4 mb-4">
        <div>
            <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Keuntungan
            </p>
        </div>
        <!-- <div class="col-span-2 place-self-end">
            <a href="{{route('editor.setting.keuntungan.create')}}" class="rounded bg-cyan-500 hover:bg-cyan-700 py-2 px-4 text-white transition duration-300 font-semibold">+ Tambah Data</a>
        </div> -->
    </div>

    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tahun</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Keuntungan</th>                    
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>                    
                    <!-- <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th> -->
                </tr>
            </thead>
            <tbody class="text-gray-700">
                    @php
                       $i = 1; 
                    @endphp
                    @foreach ($keuntungans as $data)
                    <tr>
                        <td class="text-left py-3 px-4">{{$i++}}</td>
                        <td class="text-left py-3 px-4">{{$data->tahun}}</td>
                        <td class="text-left py-3 px-4">Rp. {{number_format($data->nominal)}}</td>
                        <td class="text-left py-3 px-4">
                            @if ($data->is_active == 0)
                                    <a href="{{route ('editor.setting.keuntungan.change.default', $data->id)}}" class="px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded">ON</a>
                            @else
                                Aktif
                            @endif
                        </td>
                        
                        <!-- <td class="flex space-x-2 text-left py-3 px-4">
                    <a href="{{ url('editor/setting/keuntungan')}}/{{ $data->id }}/{{ 'edit' }}">
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
                    <form action="{{url('editor/setting/keuntungan')}}/{{$data->id}}" method="post">
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
                </td> -->
                    </tr>
                        
                    @endforeach
                    
                </tbody>
            
        </table>
    </div>
</div>

@endsection