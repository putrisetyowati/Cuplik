<aside class="relative bg-gray-700 h-full w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{route('admin.dashboard.index')}}" class="flex items-center bg-gray-900 text-white py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <!-- <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-sticky-note mr-3"></i>
                Setting
            </a> -->
            <!-- <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-table mr-3"></i>
                Tentang Kami
            </a> -->
            <a href="{{route('admin.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-book mr-3"></i>
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
