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

         <div class="card ">

             <div class="card-body">
                 <form action="{{ route('simpandata') }}" method="POST" enctype="multipart/form-data">
                     @csrf


                     <div class="row">
                         <label class="col-sm-6 col-lg-1 col-form-label"><b>NAMA</b></label>
                         <div class="col-sm-6 col-lg-11">
                             <div class="input-group">



                                 <input type="text"
                                     class="form-control form-control-uppercase @error('nama') is-invalid @enderror"
                                     name="nama" placeholder="Masukkan Nama">
                                 <!-- error message untuk title -->
                                 @error('nama')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
                                 @enderror


                             </div>
                         </div>
                     </div>
                     <br>
                     <div class="row">
                         <label class="col-sm-6 col-lg-1 col-form-label"><b>JUMLAH</b></label>
                         <div class="col-sm-6 col-lg-11">
                             <div class="input-group">


                                 <input type="text"
                                     class="form-control form-control-uppercase @error('jumlah') is-invalid @enderror"
                                     name="jumlah" placeholder="Masukkan Jumlah">
                                 <!-- error message untuk title -->
                                 @error('jumlah')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
                                 @enderror


                             </div>
                         </div>

                     </div>
                     <br>
                     <div class="card-footer">
                         <button type="submit" class="btn btn-success"></i>Simpan</button>
                     </div>

                 </form>
             </div>
         </div>
     </div>


    
     <!-- /.container-fluid -->
 @endsection
