<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Counter-Covid CTIS - Dashboard</title>
    <!-- Icon -->
    <link rel="icon" href="/images/favicon.webp">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/sb-admin-custom.css" rel="stylesheet">
    <link href="/css/numberInput.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('managerDashboard') }}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-clinic-medical "></i>
                </div>
                <div class="sidebar-brand-text mx-3">Counter-Covid CTIS</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('managerDashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manager Menu
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('registerTester') }}">
                    <i class="fas fas fa-user-plus"></i>
                    <span>Register Tester</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewTesters') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>View Testers</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('manageTestKit') }}">
                    <i class="fas fa-fw fa-syringe"></i>
                    <span>Manage Test Kit<i class="fas fa-kite    "></i></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('managerViewTestingHistory') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>View Testing History</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        Welcome
                                        @if (Auth::user()->gender == 'male')
                                            Mr.
                                        @elseif (Auth::user()->gender == 'female')
                                            Ms.
                                        @endif
                                        <strong>{{ Auth::user()->name }}</strong>
                                    </span>
                                    <img src="https://img.icons8.com/color/48/ffffff/manager.png" />
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            </>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manager Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row text-center">
                        @php
                                    $centerName;
                                    $centerID;
                                    $rapid;
                                    $swab;
                                    $pcr;
                                    foreach($testCenter as $key => $data) {
                                        if ($data->name == Auth::user()->testCenter) {
                                            $centerID = $data->id;
                                        }      
                                    }
                                    foreach ($testKits as $key2 => $data2) {
                                        if($data2->center_id == $centerID) {
                                            $rapid = $data2->rapidStock;
                                            $swab = $data2->swabStock;
                                            $pcr = $data2->pcrStock;
                                        }
                                    }
                                @endphp

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-bottom-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="fas fa-syringe  fa-3x text-gray-300"></i><br><br>
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"
                                                style="font-size: 15px">
                                                Total Stock of Rapid Test Kit</div><br>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                style="font-size: 40px;">{{$rapid}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-bottom-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="fas fa-syringe  fa-3x text-gray-300"></i><br><br>
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"
                                                style="font-size: 15px">
                                                Total Stock of Swab Test Kit</div><br>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                style="font-size: 40px;">{{$swab}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-bottom-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="fas fa-syringe fa-3x text-gray-300"></i><br><br>
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"
                                                style="font-size: 15px">
                                                Total Stock of PCR Test Kit</div><br>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                style="font-size: 40px;">{{$pcr}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-bottom-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <i class="fas fa-syringe  fa-3x text-gray-300"></i><br><br>
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"
                                                style="font-size: 15px">
                                                Total of Overall Test Kit Stock</div><br>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                style="font-size: 40px;">{{$rapid + $swab + $pcr}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-9 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark">Update Test Kit Stock</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table ble class="table table-borderless">
                                        <form class="needs-validation" novalidate="" method="POST" action="{{ route('manageTestKit') }}">
                                            @csrf
                                            <input type="hidden" id="id" name="id" value={{$centerID}}>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Rapid Test Kit Stock</th>
                                                    <td>
                                                        <div style="width: 50%; margin: 0 auto;">
                                                            <input type="number" value="{{old('rapid', $rapid)}}" min="1" max="10000" step="1"
                                                                name="rapid" />
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="alert alert-success" role="alert" hidden>
                                                            Test Kit Updated!
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Swab Test Kit Stock</th>
                                                    <td>
                                                        <div style="width: 50%; margin: 0 auto;">
                                                            <input type="number" value="{{$swab}}" min="1" max="10000" step="1"
                                                                name="swab" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                       Save changes to the stock of your test kit?
                                                    </td>
                                                    <td>
                                                        <div class="alert alert-success" role="alert" hidden>
                                                            Test Kit Updated!
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">PCR Test Kit Stock</th>
                                                    <td>
                                                        <div style="width: 50%; margin: 0 auto;">
                                                            <input type="number" value="{{$pcr}}" min="1" max="10000" step="1"
                                                                name="pcr" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm mr-2">
                                                            <i class="fas fa-check"></i>
                                                            Save Change</button>
                                                        </form>
                                                        <button type="submit" class="btn btn-danger btn-sm" onClick="refreshPage()">
                                                            <i class="fas fa-times"></i>
                                                            Cancel</button>
                                                    </td>
                                                    <td>
                                                        <div class="alert alert-success" role="alert" hidden>
                                                            Test Kit Updated!
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Content Row -->
                    <div class="row">

                    </div>
                    <!-- End of Main Content -->



                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white" style="margin-top: 280px;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Counter-Covid CTIS 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="/vendor/jquery/jquery.min.js"></script>
            <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="/js/demo/chart-area-demo.js"></script>
            <script src="/js/demo/chart-pie-demo.js"></script>

            <script src="/js/numberInput.js"></script>
            <script>
                $("input[type='number']").inputSpinner();

            </script>
            <script>
                function refreshPage(){
                window.location.reload();
                } 
            </script>

</body>

</html>
