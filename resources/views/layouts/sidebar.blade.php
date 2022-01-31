<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="/"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
				@if(Auth::user()->role == 'admin'){
                <li> <a href="/students"><i class="fas fa-user"></i> <span>Siswa</span></a> </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> User & Roles </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="#"> User </a></li>
                        <li><a href="#"> Roles </a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
