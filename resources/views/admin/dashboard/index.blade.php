@extends('admin.app')
@section('title','Dashboard')
@section('content')


                <h1 class="font-bold text-3xl text-black pb-6">Dashboard</h1>
    
                <!-- Bagian 1 -->
                <!-- card -->
                <div class="grid grid-cols-4 gap-4">
                    <div class="pl-1 w-60 h-20 bg-red-600 rounded-lg shadow-md">
                        <div class="flex w-full h-full py-2 px-4 bg-white rounded-lg justify-between">
                            <div class="my-auto">
                                <p class="font-bold text-xl">BERITA</p>
                                <p class="text-lg">{{$news}}</p>
                            </div>
                            <div class="my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>               
                            </div>
                        </div>
                    </div>

                    <div class="pl-1 w-60 h-20 bg-blue-500 rounded-lg shadow-md">
                        <div class="flex w-full h-full py-2 px-4 bg-white rounded-lg justify-between">
                            <div class="my-auto">
                                <p class="font-bold text-xl">MENU</p>
                                <p class="text-lg">{{$menu}}</p>
                            </div>
                            <div class="my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>               
                            </div>
                        </div>
                    </div>

                    <div class="pl-1 w-60 h-20 bg-orange-500 rounded-lg shadow-md">
                        <div class="flex w-full h-full py-2 px-4 bg-white rounded-lg justify-between">
                            <div class="my-auto">
                                <p class="font-bold text-xl">EDITOR</p>
                                <p class="text-lg">{{$editor}}</p>
                            </div>
                            <div class="my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>               
                            </div>
                        </div>
                    </div>

                    <div class="pl-1 w-60 h-20 bg-fuchsia-600 rounded-lg shadow-md">
                        <div class="flex w-full h-full py-2 px-4 bg-white rounded-lg justify-between">
                            <div class="my-auto">
                                <p class="font-bold text-xl">IKLAN GAMBAR</p>
                                <p class="text-lg">{{$iklan}}</p>
                            </div>
                            <div class="my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>               
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- Bagian 2 -->
        <div class="w-full mt-12">
             <p class="text-xl pb-3 flex items-center">
                 <i class="fas fa-list mr-3"></i> REKAP
             </p>
                <!-- tab -->
             <div class="w-full mt-6" x-data="{ openTab: 1 }">
                    <div>
                        <ul class="flex border-b">
                            <li class="-mb-px mr-1" @click="openTab = 1">
                                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Jumlah Postingan</a>
                            </li>         
                        </ul>
                    </div>

                    <!-- tabel -->
                    <div class="bg-white p-6">
                        <div id="" class="" x-show="openTab === 1">
                            <form action="{{ route('admin.dashboard.index') }}" class="flex mb-2">
                                <div class="px-4 w-1/3">
                                    <label class="block text-sm text-gray-900">Bulan</label>
                                    <div class="relative w-full py-1 text-gray-700 rounded">
                                        <select
                                            class="block p-2 w-full bg-gray-200 appearance-none focus:outline-none"
                                            name="month">
                                            @foreach($months as $key => $value)
                                                <option value="{{$key}}" {{ $key == $currentMonth ? 'selected' : '' }}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                        <div class="flex items-center pointer-events-none absolute inset-y-0 right-0 px-2 text-gray-700">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 w-1/3">
                                    <label class="block text-sm text-gray-900" for="menu_id">Tahun</label>
                                    <div class="relative w-full py-1 text-gray-700 rounded">
                                        <select
                                            class="block p-2 w-full bg-gray-200 appearance-none focus:outline-none"
                                            name="year">
                                            @foreach($years as $value)
                                                <option value="{{$value}}" {{ $value == $currentYear ? 'selected' : '' }}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                        <div class="flex items-center pointer-events-none absolute inset-y-0 right-0 px-2 text-gray-700">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <label class="block text-sm">&nbsp;</label>
                                    <div class="relative w-full py-1 mt-1">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>    

                            <div class="bg-white overflow-auto">
                                <table class="min-w-full bg-white">
                                    <thead class="bg-gray-800 text-white">
                                        <tr>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Username</th>
                                            <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Jumlah Upload</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Bulan</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Pendapatan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-700">

                                        @foreach ($user as $data)
                                        <tr>
                                            <td class="w-1/4 text-left py-3 px-4">{{$data->username}}</td>
                                            <td class=" text-left py-3 px-4">{{$data->total_berita}}</td>
                                            <td class="w-1/4 text-left py-3 px-4">{{ $currentMonthText }}</td>
                                            <td class=" text-left py-3 px-4">Rp. {{number_format($data->total_berita*$nominal)}}</td>
                                        </tr>
                                            
                                        @endforeach
                    
                                    </tbody>
                                </table>
                            </div>
                        </div>





                                             
                    </div>
                </div>    
        </div>

            
@endsection