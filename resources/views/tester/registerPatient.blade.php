<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Counter-Covid CTIS - Register Patient</title>

    <!-- Icon -->
    <link rel="icon" href="/images/favicon.webp">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css" />

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/sb-admin-custom.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('testerDashboard') }}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-clinic-medical "></i>
                </div>
                <div class="sidebar-brand-text mx-3">Counter-Covid CTIS</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('testerDashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tester Menu
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('registerPatient') }}">
                    <i class="fas fas fa-user-plus"></i>
                    <span>Register Patient</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('approveTestRequest') }}">
                    <i class="fas fa-fw fa-book-medical"></i>
                    <span>Approve Test Request</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('updateTestResult') }}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Update Test Result</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('testerViewTestingHistory') }}">
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
                                    <img src="https://img.icons8.com/color/48/ffffff/nurse-male.png" />
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
                <form class="needs-validation" novalidate="" method="POST"
                                        action="{{ route('registerPatient') }}">
                                        @csrf
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tester Dashboard</h1>
                    </div>

                    <div class="row">
                        
                        
                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4 pb-2">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark">Register Patient</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body pl-5" style="width: 70%;">
                                        <div class="row g-3">
                                            {{-- First Name --}}
                                            <div class="col-sm-6">
                                                <label for="firstName">{{ __('First Name') }}</label>
                                                <input type="text" class="form-control" id="firstName" name="name"
                                                    placeholder="first name" value="{{ old('firstName') }}" required
                                                    autofocus>
                                                {{-- @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror --}}
                                            </div>
                                            {{-- Last Name --}}
                                            <div class="col-sm-6">
                                                <label for="lastName">{{ __('Last Name') }}</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName"
                                                    placeholder="last name" value="{{ old('lastName') }}" required>
                                                {{-- @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror --}}
                                            </div>
                                            <br><br><br><br>
                                            {{-- Email --}}
                                            <div class="col-12">
                                                <label for="email"
                                                    class="form-label">{{ __('E-Mail Address') }}</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    name="email" placeholder="youremail@example.com"
                                                    value="{{ old('email') }}" required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <br><br><br><br>
                                            {{-- Password --}}
                                            <div class="col-12">
                                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="password" name="password" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <br><br><br><br>
                                            {{-- Confirm Password --}}
                                            <div class="col-12">
                                                <label for="password-confirm"
                                                    class="form-label">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required>
                                            </div>
                                            <br><br><br><br>
                                            {{-- Birth Date --}}
                                            <div class="col-6 mt-3 pe-5" id="sandbox-container">
                                                <label for="birthDate"
                                                    class="form-label">{{ __('Birth Date') }}</label>
                                                <input type="text" class="form-control" id="birthDate" name="birthDate"
                                                    placeholder="mm/dd/yyyy" value="{{ old('birthDate') }}" required>
                                            </div>
                                            {{-- Gender --}}
                                            <div class="col-6 mt-3 ps-5">
                                                <label for="gender" class="form-label">{{ __('Gender') }}</label>
                                                <div class="form-check">
                                                    <input id="gender" name="gender" type="radio"
                                                        class="form-check-input" value="male" checked="" required="">
                                                    <label class="form-check-label">Male</label>
                                                </div>
                                                <div class="form-check">
                                                    <input id="gender" name="gender" type="radio"
                                                        class="form-check-input" value="female" required="">
                                                    <label class="form-check-label">Female</label>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        {{-- <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark">
                                        <i class="fas fa-info-circle"></i>
                                        Register Patient
                                    </h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis at minus
                                        tempore fugit illo quod laborum nemo maxime? Delectus minima deserunt quasi eum
                                        atque porro ea enim doloremque, placeat praesentium?
                                    </p>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow pb-3 mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark">Book Test Schedule</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body pl-5" style="width: 70%;">
                                        <div class="row g-3">

                                            {{-- <div class="col-12">
                                                <label for="name" class="form-label">Name</label>
                                                <div class="input-group has-validation">
                                                    <input type="text" class="form-control" id="name" name="patientName"
                                                        value="{{ Auth::user()->name }}" id="disableInput" readonly>
                                                    <div class="invalid-feedback">
                                                        Your Name is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br><br><br>
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email <span
                                                        class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    value="{{ Auth::user()->email }}" id="disableInput" readonly>
                                                <div class="invalid-feedback">
                                                    Please enter a valid email address for shipping updates.
                                                </div>
                                            </div>
                                            <br><br><br><br> --}}
                                            {{-- <div class="col-12">
                                                <label for="testCenter" class="form-label">Select Test Center<span
                                                        class="text-muted"></span></label>
                                                <select id="testCenter" class="form-control" name="testCenter"
                                                    aria-label="Default select example">
                                                    @foreach ($testCenter as $key => $data)
                                                        <option value="{{ $data->name }}"> {{ $data->name }}
                                                        </option>
                                                    @endforeach
                                                </select> --}}
                                            <div class="col-12">
                                                <label for="testCenter" class="form-label">Test Center <span
                                                        class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="testCenter" name="testCenter"
                                                    value="{{ Auth::user()->testCenter }}" id="disableInput" readonly>
                                            </div>
                                            <br><br><br><br>
                                            <div class="col-12">
                                                <label for="testType" class="form-label" name="testType">Select Test
                                                    Type<span class="text-muted"></span></label>
                                                <select id="testType" class="form-control" name="testType"
                                                    aria-label="Default select example">
                                                    <option value="Rapid Test" selected>Rapid Test</option>
                                                    <option value="Swab Test">Swab Test</option>
                                                    <option value="PCR Test">PCR Test</option>
                                                </select>
                                            </div>
                                            <br><br><br><br>
                                            <div class="col-12" id="sandbox-container">
                                                <label for="date" class="form-label">Requested Date</label>
                                                <input type="text"
                                                    class="form-control @error('date') is-invalid @enderror" id="date"
                                                    name="date" placeholder="mm/dd/yyyy" required="">
                                                @error('date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <br><br><br><br>
                                            <div class="col-12">
                                                <label for="floatingTextarea2">symptoms</label>
                                                <textarea class="form-control" placeholder="Describe your symptoms here"
                                                    name="symptoms" id="floatingTextarea2"
                                                    style="height: 100px"></textarea>
                                            </div>

                                        </div>
                                    <br><br>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <div class="card-body m-auto" style="width: 40%">
                                    <button class="w-100 btn btn-danger btn-lg" type="submit">Register
                                        & Book Test Schedule For Patient</button>
                                    <br><br>
                                    <button class="w-100 btn btn-outline-secondary btn-lg" type="reset">
                                        Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->
                </form>


                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
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

            <!-- JQuerry -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>

            <!-- Datepicker -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js">
            </script>
            <!-- Datepicker -->
            <script>
                $('#sandbox-container input').datepicker({
                    autoclose: true
                });

                $('#sandbox-container input').on('show', function(e) {
                    console.debug('show', e.date, $(this).data('stickyDate'));

                    if (e.date) {
                        $(this).data('stickyDate', e.date);
                    } else {
                        $(this).data('stickyDate', null);
                    }
                });

                $('#sandbox-container input').on('hide', function(e) {
                    console.debug('hide', e.date, $(this).data('stickyDate'));
                    var stickyDate = $(this).data('stickyDate');

                    if (!e.date && stickyDate) {
                        console.debug('restore stickyDate', stickyDate);
                        $(this).datepicker('setDate', stickyDate);
                        $(this).data('stickyDate', null);
                    }
                });

            </script>

</body>

</html>
/
