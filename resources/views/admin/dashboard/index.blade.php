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
                                <p class="text-lg">45</p>
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
                                <p class="font-bold text-xl">VIDEO</p>
                                <p class="text-lg">5</p>
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
                                <p class="font-bold text-xl">IKLAN BARIS</p>
                                <p class="text-lg">40</p>
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
                                <p class="font-bold text-xl">CURHAT RAKYAT</p>
                                <p class="text-lg">79</p>
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
                 <i class="fas fa-list mr-3"></i> Latest Reports
             </p>
                <!-- tab -->
             <div class="w-full mt-6" x-data="{ openTab: 1 }">
                    <div>
                        <ul class="flex border-b">
                            <li class="-mb-px mr-1" @click="openTab = 1">
                                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Jumlah Postingan</a>
                            </li>
                            <li class="mr-1" @click="openTab = 2">
                                <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Berita Terbaru</a>
                            </li>
                            <li class="mr-1" @click="openTab = 3">
                                <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Berita Populer</a>
                            </li>            
                        </ul>
                    </div>

                    <!-- tabel -->
                    <div class="bg-white p-6">
                        <div id="" class="" x-show="openTab === 1">
                                 <div class="bg-white overflow-auto">
                                    <table class="min-w-full bg-white">
                                        <thead class="bg-gray-800 text-white">
                                            <tr>
                                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Last name</th>
                                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-700">
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                                                <td class="w-1/3 text-left py-3 px-4">Brown</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                                                <td class="w-1/3 text-left py-3 px-4">Brown</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>





                        <div id="" class="" x-show="openTab === 2">
                                <div class="bg-white overflow-auto">    
                                    <table class="min-w-full bg-white">
                                        <thead class="bg-gray-800 text-white">
                                            <tr>
                                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Last name</th>
                                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-700">
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                                                <td class="w-1/3 text-left py-3 px-4">Brown</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                                                <td class="w-1/3 text-left py-3 px-4">Brown</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>


                        <div id="" class="" x-show="openTab === 3">
                                <div class="bg-white overflow-auto">
                                    <table class="min-w-full bg-white">
                                        <thead class="bg-gray-800 text-white">
                                            <tr>
                                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Last name</th>
                                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-700">
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                                                <td class="w-1/3 text-left py-3 px-4">Brown</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Lian</td>
                                                <td class="w-1/3 text-left py-3 px-4">Smith</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Emma</td>
                                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                            <tr class="bg-gray-200">
                                                <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                                                <td class="w-1/3 text-left py-3 px-4">Brown</td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>                       
                    </div>
                </div>    
        </div>

            
@endsection