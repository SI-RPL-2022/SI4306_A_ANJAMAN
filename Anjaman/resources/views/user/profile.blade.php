@extends('layouts.profile')

@section('title')
Anjaman | Profile
@endsection

@section('content')
    <!-- Page Wrapper -->
    <div class="container-fluid" id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-black-800" style="font-weight: bold; padding-top: 30px;">My Account</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Contact Information</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th>Nama</th>
                                            <td>{{ $user->fullname }}</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>{{ $user->username }}</td>
                                        </tr>    
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $user->email }}</td>
                                        </tr> 
                                        <tr>
                                            <th>No. Telepon</th>
                                            <td>{{ $user->phone_number }}</td>
                                        </tr> 
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Address</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <address>
                                    <p class="fw-bold">{{ $addresses->fullname }}</p>
                                    <p>{{ $addresses->phone_number }}</p>
                                    <p>{{ $addresses->address . ', ' . $address->subdistrict . ', ' . $address->city . ', ' . $address->province }}
                                    </p>
                                    <p>{{ $addresses->postal_code }}</p>
                                    </address>
                                    <a href="Edit Address.html">Edit Address</a>
                                </div>
                            </div>
                        </div>
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">My Orders</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No. Invoice</th>
                                                <th>Ship To</th>
                                                <th>Tanggal/Waktu</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Total Order</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>sprint2</td>
                                                <td>sprint2</td>
                                                <td>sprint2</td>
                                                <td>sprint2</td>
                                                <td>sprint2</td>
                                                <td>sprint2</td>
                                                <td>sprint2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- End of Main Content -->

    </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
@endsection