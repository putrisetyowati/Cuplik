<aside class="fixed bg-gray-700 h-full w-64 hidden sm:block shadow-xl">
        
        <div class="w-full px-2 bg-white">
            <img src="{{asset('admin/assets/images/putih_cuplik_2011_fix.jpg')}}" width="400" alt="">
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{route('editor.dashboard.index')}}" class="flex items-center text-white py-4 pl-6 hover:bg-gray-900 {{ Request::is('editor/setting/menu*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>

            <button class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 text-base dropdown-btn">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Setting 
                <i class="fas fa-angle-down ml-auto mr-2"></i>
            </button>
            <div class="dropdown-container">
                <ul>
                    <li> <a href="{{route('editor.setting.menu.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('editor/setting/menu*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }} "> <i class="fas fas fa-thumbtack mr-3"></i>Menu</a></li>
                    <li> <a href="{{route('editor.setting.tag.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('editor/setting/tag*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Tag</a></li>
                    <li> <a href="{{route('editor.setting.tag-sub.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('editor/setting/tag-sub*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Tag Jadi Sub</a></li>
                    <li> <a href="{{route('editor.setting.register.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('editor/setting/register*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"><i class="fas fa-thumbtack mr-3"></i>Editor</a></li>
                    <li> <a href="{{route('editor.setting.keuntungan.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('editor/setting/register*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"><i class="fas fa-thumbtack mr-3"></i>Keuntungan</a></li>
                    <li> <a href="{{route('editor.setting.member.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900 {{ Request::is('editor/setting/member*') ? 'active font-bold bg-gray-900' : 'opacity-75 hover:opacity-100 hover:bg-gray-900' }}"> <i class="fas fa-thumbtack mr-3"></i>Member</a></li>
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
            <a href="{{route('editor.news.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-newspaper mr-3"></i>
                Berita
            </a>
            <a href="{{route('editor.iklan-baris.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-bookmark mr-3"></i>
                Iklan Baris
            </a>
            <a href="{{route('editor.iklan-gambar.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-flag mr-3"></i>
                Iklan Gambar
            </a>                      
          
            <!-- <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">

            </div>
            <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">

            </div>
            <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">

            </div>
            <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">

            </div> -->
            
            <!-- <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 hover:bg-gray-900">
                <i class="fas fa-bullhorn mr-3"></i>
                Real Count
            </a> -->

            
        </nav>
        
    </aside>
