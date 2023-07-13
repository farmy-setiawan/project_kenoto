 @extends('halaman_dashboard.index')
 @if (Auth::user()->role === 'admin')
     @section('navitem')
         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
             <a class="nav-link" href="/home">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Dashboard</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             Interface
         </div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                 aria-expanded="true" aria-controls="collapseTwo">
                 <i class="fas fa-fw fa-cog"></i>
                 <span>Components</span>
             </a>
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom Components:</h6>
                     <a class="collapse-item" href="buttons.html">Buttons</a>
                     <a class="collapse-item" href="cards.html">Cards</a>
                 </div>
             </div>
         </li>

         <!-- Nav Item - Utilities Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                 aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="fas fa-fw fa-wrench"></i>
                 <span>Utilities</span>
             </a>
             <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom Utilities:</h6>
                     <a class="collapse-item" href="{{ route('usercontrol') }}">User Control</a>
                     <a class="collapse-item" href="utilities-border.html">Borders</a>
                     <a class="collapse-item" href="utilities-animation.html">Animations</a>
                     <a class="collapse-item" href="utilities-other.html">Other</a>
                 </div>
             </div>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             Addons
         </div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                 aria-expanded="true" aria-controls="collapsePages">
                 <i class="fas fa-fw fa-folder"></i>
                 <span>Pages</span>
             </a>
             <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Login Screens:</h6>
                     <a class="collapse-item" href="{{ route('datakeluarga') }}">Data IhiKenoto</a>
                     <a class="collapse-item" href="register.html">Register</a>
                     <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                     <div class="collapse-divider"></div>
                     <h6 class="collapse-header">Other Pages:</h6>
                     <a class="collapse-item" href="404.html">404 Page</a>
                     <a class="collapse-item" href="blank.html">Blank Page</a>
                 </div>
             </div>
         </li>

         <!-- Nav Item - Charts -->
         <li class="nav-item">
             <a class="nav-link" href="charts.html">
                 <i class="fas fa-fw fa-chart-area"></i>
                 <span>Charts</span></a>
         </li>

         <!-- Nav Item - Tables -->
         <li class="nav-item">
             <a class="nav-link" href="tables.html">
                 <i class="fas fa-fw fa-table"></i>
                 <span>Tables</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>
     @endsection
 @elseif(Auth::user()->role === 'user')
     @section('navitem')
         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
             <a class="nav-link" href="/home">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Dashboard</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         {{-- <!-- Heading -->
         <div class="sidebar-heading">
             Interface
         </div> --}}

         <!-- Nav Item - Pages Collapse Menu -->
         {{-- <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                 aria-expanded="true" aria-controls="collapseTwo">
                 <i class="fas fa-fw fa-cog"></i>
                 <span>Components</span>
             </a>
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom Components:</h6>
                     <a class="collapse-item" href="buttons.html">Buttons</a>
                     <a class="collapse-item" href="cards.html">Cards</a>
                 </div>
             </div>
         </li> --}}

         <!-- Nav Item - Utilities Collapse Menu -->
         {{-- <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                 aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="fas fa-fw fa-wrench"></i>
                 <span>Utilities</span>
             </a>
             <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom Utilities:</h6>
                     <a class="collapse-item" href="utilities-color.html">Colors</a>
                     <a class="collapse-item" href="utilities-border.html">Borders</a>
                     <a class="collapse-item" href="utilities-animation.html">Animations</a>
                     <a class="collapse-item" href="utilities-other.html">Other</a>
                 </div>
             </div>
         </li> --}}

         <!-- Divider -->
         {{-- <hr class="sidebar-divider"> --}}

         <!-- Heading -->
         {{-- <div class="sidebar-heading">
             Addons
         </div> --}}

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                 aria-expanded="true" aria-controls="collapsePages">
                 <i class="fas fa-fw fa-folder"></i>
                 <span>Data IhiKenoto</span>
             </a>
             <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Menu</h6>
                     <a class="collapse-item" href="{{ route('datakeluarga') }}">Data IhiKenoto</a>
                    
                 </div>
             </div>
         </li>

         <!-- Nav Item - Tables -->
         {{-- <li class="nav-item">
             <a class="nav-link" href="tables.html">
                 <i class="fas fa-fw fa-table"></i>
                 <span>Tables</span></a>
         </li> --}}

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>
     @endsection
 @endif

 @section('main')
     <!-- Begin Page Content -->
     <div class="container-fluid">

         <!-- Page Heading -->
         <h1 class="h3 mb-2 text-gray-800">Data Ihi Kenoto</h1>
         {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
             For more information about DataTables, please visit the <a target="_blank"
                 href="https://datatables.net">official DataTables documentation</a>.</p> --}}
         <div class="row">
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-success shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                     Total Uang Yang terkumpul (Rp.)</div>
                                 <div class="h2 mb-0 font-weight-bold text-gray-800">@currency($datas)</div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-warning shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                     Jumlah Keluarga (Orang)</div>
                                 <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $jum }}</div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-user fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- DataTales Example -->
         <div class="card shadow mb-4">
             <div class="card-header py-3">

                 <a href="{{ route('tambahkeluarga') }}"><button type="button" class="btn btn-success"><i
                             class="ik ik-plus"></i>Tambah Data</button></i></a>
             </div>

             <div class="card-body">
                 <div class="table-responsive">

                     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Nama</th>
                                 <th>Jumlah (Rp.)</th>
                                 <th>Aksi</th>

                             </tr>
                         </thead>
                         <tfoot>
                             <tr>
                                 <th>No</th>
                                 <th>Nama</th>
                                 <th>Jumlah (Rp.)</th>
                                 <th>Aksi</th>

                             </tr>
                         </tfoot>
                         <tbody>
                             @forelse ($proposal as $datas)
                                 <tr>
                                     <td>{{ $loop->iteration }}</td>
                                     <td>{{ $datas->nama }}</td>
                                     <td>@currency($datas->jumlah)</td>
                                     <td>
                                         <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#"
                                             method="POST">
                                             <a href="#" class="btn btn-dark"><i class="fas fa-pen"></i></a>

                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>
                                             </button>
                                         </form>
                                     </td>

                                 </tr>
                             @empty
                                 <div class="alert alert-danger">
                                     Data Pengumpul Masih Kosong.
                                 </div>
                             @endforelse
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>

     </div>
     <!-- /.container-fluid -->
 @endsection
