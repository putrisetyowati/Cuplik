<aside class="relative bg-gray-700 h-full w-64 hidden sm:block shadow-xl">
        
        <div class="w-60">
            <img src="{{asset('admin/assets/images/putih_cuplik_2011_fix.jpg')}}" width="400" alt="">
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{route('admin.dashboard.index')}}" class="flex items-center text-white py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/setting/menu*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>

            <button class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 dropdown-btn">Setting 
            </button>
            <div class="dropdown-container">
                <ul>
                    <li> <a href="{{route('admin.setting.menu.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/setting/menu*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }} "> <i class="fas fas fa-thumbtack mr-3"></i>Menu</a></li>
                    <li> <a href="{{route('admin.setting.tag.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/setting/tag*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Tag</a></li>
                    <li> <a href="{{route('admin.setting.tag-sub.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/setting/tag-sub*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Tag Jadi Sub</a></li>
                    <li> <a href="{{route('admin.setting.register.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/setting/register*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"><i class="fas fa-thumbtack mr-3"></i>Editor</a></li>
                    <li> <a href="{{route('admin.setting.keuntungan.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/setting/register*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"><i class="fas fa-thumbtack mr-3"></i>Keuntungan</a></li>
                    <li> <a href="{{route('admin.setting.member.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/setting/member*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Member</a></li>
                </ul>        
            </div>

            <button class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 dropdown-btn">Tentang Kami
            </button>
            <?php
                $about = App\Models\TentangKami::all();
                $redaksi = App\Models\Redaksi::all();
                $pedoman = App\Models\Pedoman::all();
                $disclaimer = App\Models\Disclaimer::all();

            ?>
            <div class="dropdown-container">
                <ul>

                <!-- @if (empty($data->id))
                        <li> <a href="{{route('admin.tentangkami.tentang-kami.create')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/tentang-kami/tentang-kami*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Tentang Kami</a></li>
                    @else
                        <li> <a href="{{ url('admin/tentangkami/tentang-kami')}}/{{ $data->id }}/{{ 'edit' }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/tentang-kami/tentang-kami*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Tentang Kami</a></li>
                    @endif -->
               
                    

                    @foreach ($redaksi as $data)
                    <li> <a href="{{ url('admin/tentangkami/redaksi')}}/{{ $data->id }}/{{ 'edit' }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/tentang-kami/redaksi*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Redaksi</a></li>
                    @endforeach

                    @foreach ($pedoman as $data)
                    <li> <a href="{{ url('admin/tentangkami/pedoman')}}/{{ $data->id }}/{{ 'edit' }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/tentang-kami/pedoman*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Pedoman</a></li>
                    @endforeach

                    @foreach ($disclaimer as $data)
                    <li> <a href="{{ url('admin/tentangkami/disclaimer')}}/{{ $data->id }}/{{ 'edit' }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/tentang-kami/disclaimer*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Disclaimer</a></li>

                    @endforeach
                    

                   
                    
                    <!-- <li> <a href="{{route('admin.tentangkami.redaksi.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/tentangkami/redaksi*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Redaksi</a></li> -->
                    <!-- <li> <a href="{{route('admin.tentangkami.disclaimer.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('admin/tentangkami/disclaimer*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Disclaimer</a></li>
                    <li> <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-thumbtack mr-3"></i>Privacy Policy</a></li>
                    <li> <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-thumbtack mr-3"></i>Karir</a></li>
                    <li> <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-thumbtack mr-3"></i>Kotak Pos</a></li>
                    <li> <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-thumbtack mr-3"></i>Info Iklan</a></li> -->
                </ul>        
            </div>
            <!-- <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-sticky-note mr-3"></i>
                Setting
            </a> -->
            <!-- <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-table mr-3"></i>
                Tentang Kami
            </a> -->
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-newspaper mr-3"></i>
                Berita
            </a>
            <a href="{{route('admin.iklan-baris.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-bookmark mr-3"></i>
                Iklan Baris
            </a>
            <a href="{{route('admin.iklan-gambar.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-flag mr-3"></i>
                Iklan Gambar
            </a>   
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                             
            </a> 
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                             
            </a>   
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                             
            </a>     
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                             
            </a>     
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                             
            </a>     
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                             
            </a>     
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                             
            </a>     
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                             
            </a>                      

            
            <!-- <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-bullhorn mr-3"></i>
                Real Count
            </a> -->

            
        </nav>
        
    </aside>
