@extends('admin.app')
@section('title','Iklan Gambar')
@section('content')
<div class="w-full mt-12">
    <div class="grid grid-cols-3 gap-4 mb-4">
        <div>
            <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Iklan Gambar
            </p>
        </div>
        <div class="col-span-2 place-self-end">
            <a href="{{route('admin.iklan-gambar.create')}}" class="rounded bg-cyan-500 hover:bg-cyan-700 py-2 px-4 text-white transition duration-300 font-semibold">+ Tambah Data</a>
        </div>
    </div>


                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Posisi</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Judul</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Default</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                    <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

@endsection