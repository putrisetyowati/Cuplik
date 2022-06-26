<aside class="relative bg-gray-700 h-full w-64 hidden sm:block shadow-xl">
        <!-- <div class="p-6">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        </div> -->
        <div class="w-60">
            <img src="{{asset('admin/assets/images/putih_cuplik_2011_fix.jpg')}}" width="400" alt="">
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{route('admin.dashboard.index')}}" class="flex items-center bg-gray-900 text-white py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>

            <button class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 dropdown-btn">Setting 
            </button>
            <div class="dropdown-container">
                <ul>
                    <li> <a href="{{route('admin.setting.menu.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-align-justify mr-3"></i>Menu</a></li>
                    <li> <a href="{{route('admin.setting.tag.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-thumbtack mr-3"></i>Tag</a></li>
                    <li> <a href="{{route('admin.setting.posisi-iklan.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-image mr-3"></i>Posisi Iklan</a></li>
                    <li> <a href="{{route('admin.setting.tag-sub.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-thumbtack mr-3"></i>Tag Jadi Sub</a></li>
                    <li> <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-pen mr-3"></i>Editor & Reporter</a></li>
                    <li> <a href="{{route('admin.setting.member.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-user mr-3"></i>Member</a></li>
                </ul>        
            </div>

            <button class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 dropdown-btn">Tentang Kami
            </button>
            <div class="dropdown-container">
                <ul>
                    <li> <a href="{{route('admin.tentangkami.kontak.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-address-card mr-3"></i>Kontak</a></li>
                    <li> <a href="{{route('admin.tentangkami.tentang-kami.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-address-book mr-3"></i>Tentang Kami</a></li>
                    <li> <a href="{{route('admin.tentangkami.redaksi.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-tachometer-alt mr-3"></i>Redaksi</a></li>
                    <li> <a href="{{route('admin.tentangkami.disclaimer.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-tachometer-alt mr-3"></i>Disclaimer</a></li>
                    <li> <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-tachometer-alt mr-3"></i>Privacy Policy</a></li>
                    <li> <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-tachometer-alt mr-3"></i>Karir</a></li>
                    <li> <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-tachometer-alt mr-3"></i>Kotak Pos</a></li>
                    <li> <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 "> <i class="fas fa-tachometer-alt mr-3"></i>Info Iklan</a></li>
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
            <a href="{{route('admin.covid-19.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-certificate mr-3"></i>
                Covid-19
            </a>
            <a href="{{route('admin.iklan-baris.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-bookmark mr-3"></i>
                Iklan Baris
            </a>
            <a href="{{route('admin.iklan-gambar.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-flag mr-3"></i>
                Iklan Gambar
            </a> 
            <a href="{{route('admin.video.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-play mr-3"></i>
                Video
            </a>
            <a href="{{route('admin.poling.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-users mr-3"></i>
                Poling
            </a>                       
            <a href="{{route('admin.curhat-rakyat.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-comment mr-3"></i>
                Curhat Rakyat
            </a>
            
            <!-- <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-bullhorn mr-3"></i>
                Real Count
            </a> -->

            
        </nav>
        
    </aside>
